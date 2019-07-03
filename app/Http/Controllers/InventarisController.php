<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AndreInventaris;
use App\AndreRuang;
use App\AndreJenis;
use App\AndrePetugas;
use PDF;

class InventarisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $andre_inventaris = AndreInventaris::all();

        return view('inventaris/index', compact('andre_inventaris'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $andre_inventariss = AndreInventaris::all();
        $andre_jenis   = AndreJenis::all();
        $andre_ruangs   = AndreRuang::all();
        $andre_petugas   = AndrePetugas::all();
        return view('inventaris/create', compact('andre_inventariss','andre_jenis','andre_ruangs','andre_petugas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {

        $andre_inventaris = new AndreInventaris;
        $andre_inventaris->andre_kode_inventaris = $req->andre_kode_inventaris;
        $andre_inventaris->andre_nama = $req->andre_nama;
        $andre_inventaris->andre_jumlah = $req->andre_jumlah;
        $andre_inventaris->andre_kondisi = $req->andre_kondisi;
        $andre_inventaris->andre_keterangan = $req->andre_keterangan;
        $andre_inventaris->andre_id_jenis = $req->andre_id_jenis;
        $andre_inventaris->andre_id_ruang = $req->andre_id_ruang;
        $andre_inventaris->andre_id_petugas = $req->andre_id_petugas;
        $andre_inventaris->andre_tanggal_register = $req->andre_tanggal_register;
        $andre_inventaris->save();
        session()->flash('success-create', 'Data berhasil disimpan');
    
        return redirect('/inventaris/index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($andre_id_inventaris)
    {
        $andre_inventaris = AndreInventaris::find($andre_id_inventaris);
        $andre_jenis   = AndreJenis::all();
        $andre_ruangs   = AndreRuang::all();
        $andre_petugas   = AndrePetugas::all();
        return view('inventaris/edit', compact('andre_inventaris','andre_jenis','andre_ruangs','andre_petugas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $andre_id_inventaris)
    {
        $andre_inventaris = AndreInventaris::find($andre_id_inventaris);
        $andre_inventaris->andre_kode_inventaris = $req->andre_kode_inventaris;
        $andre_inventaris->andre_nama = $req->andre_nama;
        $andre_inventaris->andre_jumlah = $req->andre_jumlah;
        $andre_inventaris->andre_kondisi = $req->andre_kondisi;
        $andre_inventaris->andre_keterangan = $req->andre_keterangan;
        $andre_inventaris->andre_id_jenis = $req->andre_id_jenis;
        $andre_inventaris->andre_id_ruang = $req->andre_id_ruang;
        $andre_inventaris->andre_id_petugas = $req->andre_id_petugas;
        $andre_inventaris->andre_tanggal_register = $req->andre_tanggal_register;
        $andre_inventaris->save();
        session()->flash('success-create', 'Data berhasil diubah');
        return redirect('/inventaris/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($andre_id_inventaris)
    {
        $andre_inventaris = AndreInventaris::find($andre_id_inventaris);
        $andre_inventaris->delete();

        session()->flash('success-create', 'Data berhasil dihapus');
        return redirect('/inventaris/index');
    }

    public function print(){
        $andre_inventaris = AndreInventaris::all();

        $pdf = PDF::loadview('inventaris/print', compact('andre_inventaris'), ['andre_inventaris' => $andre_inventaris]);

        return $pdf->stream('Cetak Anggota.pdf');
    }
}
