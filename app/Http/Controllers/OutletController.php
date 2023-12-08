<?php

namespace App\Http\Controllers;

use App\Models\Outlet;
use Illuminate\Http\Request;

class OutletController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $outlet = Outlet::all();
        return view('outlet.index', compact('outlet'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $outlet = Outlet::all();
        return view('outlet.create', compact('outlet'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Outlet $outlet)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'tlp' => 'required',
        ]);

        $outlet::create([
            'nama' => $request['nama'],
            'alamat' => $request['alamat'],
            'tlp' => $request['tlp'],
        ]);

        return redirect()->route('outlet.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $outlet = Outlet::all();
        return view('outlet.show', compact('outlet'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $outlet = Outlet::all();
        return view('outlet.edit', compact('outlet'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Outlet $outlet)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'tlp' => 'required',
        ]);
        $outlet->update($request->all());
        return redirect()->route('outlet.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Outlet $outlet)
    {
        $outlet = Outlet::where('id', $outlet->id)->delete();
        return redirect()->route('outlet.index');
    }
}
