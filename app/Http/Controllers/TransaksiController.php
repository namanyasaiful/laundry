<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Outlet;
use App\Models\Paket;
use App\Models\Transaksi;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Outlet $outlet, Member $member, Paket $paket, User $user)
    {
        $transaksi = Transaksi::all();
        $outlet = Outlet::all();
        $member = Member::all();
        $user = User::all();
        $paket = Paket::all();
        return view('transaksi.index', compact('transaksi', 'outlet', 'member', 'paket', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Outlet $outlet, Member $member, Paket $paket, User $user)
    {
        $transaksi = Transaksi::all();
        $outlet = Outlet::all();
        $member = Member::all();
        $user = User::all();
        $paket = Paket::all();
        return view('transaksi.create', compact('transaksi', 'outlet', 'member', 'paket', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Transaksi $transaksi)
    {
        $request->validate([
            'outlet_id' => 'required',
            'member_id' => 'required',
            'paket_id' => 'required',
            'tgl' => 'required',
            'selesai' => 'required',
            'status' => 'required',
            'keterangan' => 'required'
        ]);
        $transaksi::create([
            'outlet_id'    => $request['outlet_id'],
            'member_id'        => $request['member_id'],
            'paket_id'   => $request['paket_id'],
            'tgl'        => $request['tgl'],
            'selesai'        => $request['selesai'],
            'status'        => $request['status'],
            'keterangan'        => $request['keterangan']
        ]);
        return redirect()->route('transaksi.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Outlet $outlet, Member $member, Paket $paket, User $user)
    {
        $transaksi = Transaksi::all();
        $outlet = Outlet::all();
        $member = Member::all();
        $user = User::all();
        $paket = Paket::all();
        return view('transaksi.index', compact('transaksi', 'outlet', 'member', 'paket', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id,Outlet $outlet, Member $member, Paket $paket, User $user)
    {
        $transaksi = Transaksi::all();
        $outlet = Outlet::all();
        $member = Member::all();
        $user = User::all();
        $paket = Paket::all();
        return view('transaksi.edit', compact('transaksi', 'outlet', 'member', 'paket', 'user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
