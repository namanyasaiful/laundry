<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Member;
use App\Models\Outlet;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public $auth = Auth::class;
    public function __construct()
    {
        $this->middleware('guest')->except([
            'logout', 'dashboard'
        ]);
    }
    // register form
    public function register()
    {
        return view('auth.register');
    }
    // store register
    public function store(Request $request, User $user)
    {
        $request->validate([
            'nama' => 'required',
            'ussername' => 'required|max:25',
            'password' => 'required|min:8',
        ]);
        // insert data user
        $user::create([
            'nama'          => $request['nama'],
            'ussername'     => $request['ussername'],
            'password'      => Hash::make($request->password),
        ]);
        $credentials = $request->only('ussername', 'password');
        Auth::attempt($credentials);
        $request->session()->regenerate();
        return redirect()->route('dashboard');
    }
    // login form
    public function login()
    {
        return view('auth.login');
    }
    // auth proses login
    public function auth(Request $request)
    {
        $request->validate([
            'ussername' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('ussername', 'password');
        if (Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }
        return redirect()->back()->withErrors([
            'ussername' => 'ussername atau tidak ditemukan',
        ])->onlyInput('ussername');
        
    }
    // logout proses
    public function logout(Request $request, Auth $auth)
    {
        $auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('auth.login');
    }
    // dasboard page
    public function dashboard(Auth $auth,Outlet $outlet, Member $member, User $user, Transaksi $transaksi)
    {
        $jumlah_user = User::count();
        $jumlah_member = Member::count();
        $jumlah_transaksi = Transaksi::count();
        $jumlah_outlet = Outlet::count();
        return view('dashboard', compact('jumlah_user', 'jumlah_member', 'jumlah_transaksi', 'jumlah_outlet'));

        if ($auth::check())
        {
            return view('dashboard');
        }
        return redirect()->route('auth.login');
    }
}