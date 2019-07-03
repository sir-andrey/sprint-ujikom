<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\AndreLevel;
use App\AndrePetugas;
use App\AndrePegawai;
use App\User;
use PDF;

class AkunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $andre_akuns = User::all();
        return view('akuns/index', compact('andre_akuns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $andre_levels = AndreLevel::get();
        return view('akuns/create', compact('andre_levels'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        if ($req->andre_id_level == 1) {
            $andre_akun = new User;
            $andre_akun->name = $req->andre_nama_petugas;
            $andre_akun->username = $req->andre_username;
            $andre_akun->password = Hash::make($req->andre_password);
            $andre_akun->email = $req->andre_email;
            $andre_akun->andre_id_level = $req->andre_id_level;
            $andre_akun->save();

            $andre_akun_id = User::select('id')->whereRaw('id = (select max(`id`) from users)')->first();

            $andre_akun1 = new AndrePetugas;
            $andre_akun1->andre_id_petugas = $andre_akun_id['id'];
            $andre_akun1->andre_nama_petugas = $req->andre_nama_petugas;
            $andre_akun1->andre_username = $req->andre_username;
            $andre_akun1->andre_password = Hash::make($req->andre_password);
            $andre_akun1->andre_email = $req->andre_email;
            $andre_akun1->andre_nip = $req->andre_nip;
            $andre_akun1->andre_alamat = $req->andre_alamat;
            $andre_akun1->andre_id_level = $req->andre_id_level;
            $andre_akun1->save();

        } elseif ($req->andre_id_level == 2) {
            $andre_akun = new User;
            $andre_akun->name = $req->andre_nama_petugas;
            $andre_akun->username = $req->andre_username;
            $andre_akun->email = $req->andre_email;
            $andre_akun->password = Hash::make($req->andre_password);
            $andre_akun->andre_id_level = $req->andre_id_level;
            $andre_akun->save();

            $andre_akun_id = User::select('id')->whereRaw('id = (select max(`id`) from users)')->first();

            $andre_akun1 = new AndrePetugas;
            $andre_akun1->andre_id_petugas = $andre_akun_id['id'];
            $andre_akun1->andre_nama_petugas = $req->andre_nama_petugas;
            $andre_akun1->andre_username = $req->andre_username;
            $andre_akun1->andre_password = Hash::make($req->andre_password);
            $andre_akun1->andre_email = $req->andre_email;
            $andre_akun1->andre_nip = $req->andre_nip;
            $andre_akun1->andre_alamat = $req->andre_alamat;
            $andre_akun1->andre_id_level = $req->andre_id_level;
            $andre_akun1->save();
        } else{
            $andre_akun = new User;
            $andre_akun->name = $req->andre_nama_petugas;
            $andre_akun->username = $req->andre_username;
            $andre_akun->password = Hash::make($req->andre_password);
            $andre_akun->email = $req->andre_email;
            $andre_akun->andre_id_level = $req->andre_id_level;
            $andre_akun->save();

            $andre_akun_id = User::select('id')->whereRaw('id = (select max(`id`) from users)')->first();

            $andre_akun2 = new AndrePegawai;
            $andre_akun2->andre_id_pegawai = $andre_akun_id['id'];
            $andre_akun2->andre_nama_pegawai = $req->andre_nama_petugas;
            $andre_akun2->andre_username = $req->andre_username;
            $andre_akun2->andre_password = Hash::make($req->andre_password);
            $andre_akun2->andre_email = $req->andre_email;
            $andre_akun2->andre_nip = $req->andre_nip;
            $andre_akun2->andre_alamat = $req->andre_alamat;
            $andre_akun2->save();
        }


        return redirect('/akun/index');
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
    public function edit($id)
    {
        $andre_akun = User::find($id);
        $level = $andre_akun->andre_id_level;
        if ($level == 3) {
            $data = AndrePegawai::find($id);
        } else{
            $data = AndrePetugas::find($id);
        }
        $andre_levels = AndreLevel::get();

        return view('akuns/edit', compact('andre_akun', 'andre_levels', 'data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        if ($req->andre_id_level == 1) {
            $andre_akun = User::find($id);
            $andre_akun->name = $req->andre_nama_petugas;
            $andre_akun->username = $req->andre_username;
            $andre_akun->password = Hash::make($req->andre_password);
            $andre_akun->email = $req->andre_email;
            $andre_akun->andre_id_level = $req->andre_id_level;
            $andre_akun->save();

            $andre_akun_id = User::select('id')->whereRaw('id = (select max(`id`) from users)')->first();

            $andre_akun1 = AndrePetugas::find($id);
            $andre_akun1->andre_id_petugas = $id;
            $andre_akun1->andre_nama_petugas = $req->andre_nama_petugas;
            $andre_akun1->andre_username = $req->andre_username;
            $andre_akun1->andre_password = Hash::make($req->andre_password);
            $andre_akun1->andre_email = $req->andre_email;
            $andre_akun1->andre_nip = $req->andre_nip;
            $andre_akun1->andre_alamat = $req->andre_alamat;
            $andre_akun1->andre_id_level = $req->andre_id_level;
            $andre_akun1->save();

        } elseif ($req->andre_id_level == 2) {
            $andre_akun = User::find($id);
            $andre_akun->name = $req->andre_nama_petugas;
            $andre_akun->username = $req->andre_username;
            $andre_akun->email = $req->andre_email;
            $andre_akun->password = Hash::make($req->andre_password);
            $andre_akun->andre_id_level = $req->andre_id_level;
            $andre_akun->save();

            $andre_akun1 = AndrePetugas::find($id);
            $andre_akun1->andre_id_petugas = $id;
            $andre_akun1->andre_nama_petugas = $req->andre_nama_petugas;
            $andre_akun1->andre_username = $req->andre_username;
            $andre_akun1->andre_password = Hash::make($req->andre_password);
            $andre_akun1->andre_email = $req->andre_email;
            $andre_akun1->andre_nip = $req->andre_nip;
            $andre_akun1->andre_alamat = $req->andre_alamat;
            $andre_akun1->andre_id_level = $req->andre_id_level;
            $andre_akun1->save();
        } else{
            $andre_akun = User::find($id);
            $andre_akun->name = $req->andre_nama_petugas;
            $andre_akun->username = $req->andre_username;
            $andre_akun->password = Hash::make($req->andre_password);
            $andre_akun->email = $req->andre_email;
            $andre_akun->andre_id_level = $req->andre_id_level;
            $andre_akun->save();

            $andre_akun1 = AndrePegawai::find($id);
            $andre_akun2->andre_id_pegawai = $id;
            $andre_akun2->andre_nama_pegawai = $req->andre_nama_petugas;
            $andre_akun2->andre_username = $req->andre_username;
            $andre_akun2->andre_password = Hash::make($req->andre_password);
            $andre_akun2->andre_email = $req->andre_email;
            $andre_akun2->andre_nip = $req->andre_nip;
            $andre_akun2->andre_alamat = $req->andre_alamat;
            $andre_akun2->save();
        }

        return redirect('/akun/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $andre_akun = User::find($id);
        $andre_akun->delete();

        return redirect()->back();
    }

    public function print(){
        $andre_akun = User::all();

        $pdf = PDF::loadview('akuns/print', compact('andre_akun'), ['andre_akun' => $andre_akun]);

        return $pdf->stream('Cetak Anggota.pdf');
    }

    public function printPegawai(){
        $andre_akun = AndrePegawai::all();

        $pdf = PDF::loadview('akuns/print-pegawai', compact('andre_akun'), ['andre_akun' => $andre_akun]);

        return $pdf->stream('Cetak Anggota.pdf');
    }

    public function printPetugas(){
        $andre_akun = AndrePetugas::all();

        $pdf = PDF::loadview('akuns/print-petugas', compact('andre_akun'), ['andre_akun' => $andre_akun]);

        return $pdf->stream('Cetak Anggota.pdf');
    }
}
