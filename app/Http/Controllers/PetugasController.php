<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\AndreLevel;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $andre_petugas = User::all();
        
        return view('petugas/index', compact('andre_petugas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $andre_levels = AndreLevel::get();
        return view('petugas/create', compact('andre_levels'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $andre_petugas = new User;
        $andre_petugas->name = $req->andre_nama_petugas;
        $andre_petugas->username = $req->andre_username;
        $andre_petugas->password = $req->andre_password;
        $andre_petugas->email = $req->andre_email;
        $andre_petugas->andre_id_level = $req->andre_id_level;
        $andre_petugas->save();

        $andre_petugas1 = new AndrePetugas;
        $andre_petugas1->andre_nama_petugas = $req->andre_nama_petugas;
        $andre_petugas1->andre_username = $req->andre_username;
        $andre_petugas1->andre_password = $req->andre_password;
        $andre_petugas1->andre_id_level = $req->andre_id_level;
        $andre_petugas1->save();
        
        return redirect('/petugas/index');
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
    public function edit($andre_id_petugas)
    {
        $andre_petugas = User::find($andre_id_petugas);

        return view('petugas/edit', compact('andre_petugas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $andre_id_petugas)
    {
        $andre_petugas = User::find($req->andre_id_petugas);
        $andre_petugas->andre_nama_petugas = $req->andre_nama_petugas;
        $andre_petugas->save();

        return redirect('/petugas/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($andre_id_petugas)
    {
        $andre_petugas = User::find($andre_id_petugas);
        $andre_petugas->delete();

        return redirect()->back();
    }

    public function print(){
        $andre_petugas = User::all();

        $pdf = PDF::loadview('petugas/cetak', compact('andre_petugas'), ['andre_petugas' => $andre_petugas]);

        return $pdf->stream('Cetak Anggota.pdf');
    }
}
