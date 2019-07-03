<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AndrePegawai;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $andre_pegawais = AndrePegawai::all();

        return view('pegawais/index', compact('andre_pegawais'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pegawais/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $andre_pegawai = new AndrePegawai;
        $andre_pegawai->andre_kode_pegawai = $req->andre_kode_pegawai;
        $andre_pegawai->andre_nama_pegawai = $req->andre_nama_pegawai;
        $andre_pegawai->andre_keterangan = $req->andre_keterangan;
        $andre_pegawai->save();

        return redirect('/pegawai/index');
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
    public function edit($andre_id_pegawai)
    {
        $andre_pegawai = AndrePegawai::find($andre_id_pegawai);

        return view('pegawais/edit', compact('andre_pegawai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $andre_id_pegawai)
    {
        $andre_pegawai = AndrePegawai::find($req->andre_id_pegawai);
        $andre_pegawai->andre_kode_pegawai = $req->andre_kode_pegawai;
        $andre_pegawai->andre_nama_pegawai = $req->andre_nama_pegawai;
        $andre_pegawai->andre_keterangan = $req->andre_keterangan;
        $andre_pegawai->save();

        return redirect('/pegawai/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($andre_id_pegawai)
    {
        $andre_pegawai = AndrePegawai::find($andre_id_pegawai);
        $andre_pegawai->delete();

        return redirect('/pegawai/index');
    }

    public function print(){
        $andre_pegawai = AndrePegawai::all();

        $pdf = PDF::loadview('pegawais/print', compact('andre_pegawai'), ['andre_pegawai' => $andre_pegawai]);

        return $pdf->stream('Cetak Anggota.pdf');
    }
}
