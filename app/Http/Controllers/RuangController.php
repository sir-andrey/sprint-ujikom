<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AndreRuang;
use PDF;

class RuangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $andre_ruangs = AndreRuang::all();

        return view('ruangs/index', compact('andre_ruangs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ruangs/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $andre_ruang = new AndreRuang;
        $andre_ruang->andre_kode_ruang = $req->andre_kode_ruang;
        $andre_ruang->andre_nama_ruang = $req->andre_nama_ruang;
        $andre_ruang->andre_keterangan = $req->andre_keterangan;
        $andre_ruang->save();

        return redirect('/ruang/index');
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
    public function edit($andre_id_ruang)
    {
        $andre_ruang = AndreRuang::find($andre_id_ruang);

        return view('ruangs/edit', compact('andre_ruang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $andre_id_ruang)
    {
        $andre_ruang = AndreRuang::find($req->andre_id_ruang);
        $andre_ruang->andre_kode_ruang = $req->andre_kode_ruang;
        $andre_ruang->andre_nama_ruang = $req->andre_nama_ruang;
        $andre_ruang->andre_keterangan = $req->andre_keterangan;
        $andre_ruang->save();

        return redirect('/ruang/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($andre_id_ruang)
    {
        $andre_ruang = AndreRuang::find($andre_id_ruang);
        $andre_ruang->delete();

        return redirect('/ruang/index');
    }

    public function print(){
        $andre_ruang = AndreRuang::all();

        $pdf = PDF::loadview('ruangs/print', compact('andre_ruang'), ['andre_ruang' => $andre_ruang]);

        return $pdf->stream('Cetak Anggota.pdf');
    }
}
