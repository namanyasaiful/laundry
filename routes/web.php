<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\OutletController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PdfController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::controller(AuthController::class)->group(function() {
    // register form
    Route::get('/register', 'register')->name('auth.register');
    // store register
    Route::post('/store', 'store')->name('auth.store');
    // login form
    Route::get('/login', 'login')->name('auth.login');
    // auth proses
    Route::post('/auth', 'auth')->name('auth.authentication');
    // logout
    Route::post('/logout', 'logout')->name('auth.logout');
    // dashboard page
    Route::get('/dashboard', 'dashboard')->name('dashboard');
});

route::resource('/user', UserController::class)->middleware('auth');
route::resource('/member', MemberController::class)->middleware('auth');
route::resource('/outlet', OutletController::class)->middleware('auth');
route::resource('/paket', PaketController::class)->middleware('auth');
route::resource('/transaksi', TransaksiController::class)->middleware('auth');

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/count', [UserController::class, 'count'])->name('count');

Route::get('/pegawai/cetak_pdf', [PdfController::class, 'cetakPdf'])->name('pegawai.cetak_pdf');
