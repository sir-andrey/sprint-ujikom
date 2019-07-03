<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AndreJenis;
use PDF;

class JenisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $andre_jenis = AndreJenis::all();

        return view('jenis/index', compact('andre_jenis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jenis/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $andre_jenis = new AndreJenis;
        $andre_jenis->andre_kode_jenis = $req->andre_kode_jenis;
        $andre_jenis->andre_nama_jenis = $req->andre_nama_jenis;
        $andre_jenis->andre_keterangan = $req->andre_keterangan;
        $andre_jenis->save();

        return redirect('/jenis/index');
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
    public function edit($andre_id_jenis)
    {
        $andre_jenis = AndreJenis::find($andre_id_jenis);

        return view('jenis/edit', compact('andre_jenis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $andre_id_jenis)
    {
        $andre_jenis = AndreJenis::find($req->andre_id_jenis);
        $andre_jenis->andre_kode_jenis = $req->andre_kode_jenis;
        $andre_jenis->andre_nama_jenis = $req->andre_nama_jenis;
        $andre_jenis->andre_keterangan = $req->andre_keterangan;
        $andre_jenis->save();

        return redirect('/jenis/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($andre_id_jenis) {
        $andre_jenis = AndreJenis::find($andre_id_jenis);
        $andre_jenis->delete();

        return redirect('/jenis/index');
    }

    public function print(){
        $andre_jenis = AndreJenis::all();

        $pdf = PDF::loadview('jenis/print', compact('andre_jenis'), ['andre_jenis' => $andre_jenis]);

        return $pdf->stream('Cetak Anggota.pdf');
    }
}
