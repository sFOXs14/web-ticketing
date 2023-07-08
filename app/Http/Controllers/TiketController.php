<?php

namespace App\Http\Controllers;

use App\Models\Tiket;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;

class TiketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tiketList = Tiket::all();
    return view('dashboard', compact('tiketList'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function show($id)
    {
        $tiket = Tiket::findOrFail($id);
        return view('tiket', ['tiket' => $tiket]);
    }

    public function checkID(Request $request)
{
    $id = $request->input('id');
    $cekTiket = Tiket::find($id);

    if ($cekTiket) {
        // ID ditemukan di database
        $cekTiket->is_regis = 'Sudah Registrasi';
        $cekTiket->save();

        Session::flash('status', 'success');
        Session::flash('message', 'Registrasi Berhasil');
    } else {
        // ID tidak ditemukan di database
        Session::flash('status', 'failed');
        Session::flash('message', 'No Registrasi tidak ditemukan');
    }

    return redirect('/admin-dashboard');
}






    public function create()
    {
        $tiket = Tiket::select('id')->get();
        return view('home', ['tiket' => $tiket]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tiket = Tiket::create($request->all());

        if($tiket) {
            Session::flash('status', 'success');
            Session::flash('message', 'Registrasi berhasil!');
        }

        return redirect('tiket/' . $tiket->id);
    }

    /**
     * Display the specified resource.
     */
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        $tiket = Tiket::findOrFail($id);
        return view('tiket-edit', ['tiket' => $tiket]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tiket $tiket, $id)
    {
        $tiket = Tiket::findOrFail($id);
        $tiket->update($request->all());

        if($tiket) {
            Session::flash('status', 'success');
            Session::flash('message', 'Berhasil mengedit data pengunjung');
        }

        return redirect('admin-dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tiket $tiket, $id)
    {
        $buangTiket = Tiket::findOrFail($id);
        $buangTiket->delete();

        if($buangTiket) {
            Session::flash('status', 'success');
            Session::flash('message', 'Berhasil membuang tiket');
        }

        return redirect('admin-dashboard');
    }
}
