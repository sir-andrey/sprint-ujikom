<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\AndrePinjam;
use App\AndreJenis;
use App\AndreRuang;
use App\AndreInventaris;
use App\AndrePegawai;
use App\AndreDetil;
use Auth;
use PDF;
use DB;

class PinjamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if ( auth::user()->andre_id_level != 3) {
            $andre_pinjams = AndrePinjam::where('andre_status_persetujuan', 'Disetujui')->get();
        } else{
            $id = auth::user()->id;
            $andre_pinjams = DB::table('andre_pinjams')->where('andre_id_pegawai', $id)->get();
        }
       

        return view('pinjams/index', compact('andre_pinjams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        $andre_jenis   = AndreJenis::all();
        $andre_pegawai   = AndrePegawai::all();
        $andre_inventaris = AndreInventaris::all();

        $rusak = DB::table('andre_inventaris')->where('andre_jumlah', '>', '0')->get();
        $hitung = count($rusak);
        if( $hitung == 0 ){
            session()->flash('gagal-create', 'Tidak ada barang yang bisa dipinjam, silahkan hubungi admin.');
            return redirect()->back();
        } else{
            return view('pinjams/create', compact('andre_pegawai','andre_jenis', 'andre_inventaris', 'rusak'));
        } 
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $andre_pinjam = new AndrePinjam;
        $andre_pinjam->andre_kode_pinjam = $req->andre_kode_pinjam;
        $andre_pinjam->andre_tanggal_pinjam = $req->andre_tanggal_pinjam;
        $andre_pinjam->andre_tanggal_kembali = $req->andre_tanggal_kembali;
        $andre_pinjam->andre_status_peminjaman = $req->andre_status_peminjaman;
        if ( auth::user()->andre_id_level != 3) {
            $andre_pinjam->andre_status_persetujuan = "Disetujui";
        } else{
            $andre_pinjam->andre_status_persetujuan = "Pending";
        }
        $andre_pinjam->andre_id_petugas = $req->andre_id_petugas;
        $andre_pinjam->andre_id_pegawai = $req->andre_id_pegawai;
        $andre_pinjam->save();

        $andre_detil = new AndreDetil;

                $andre_id_pinjam = AndrePinjam::select('andre_id_pinjam')->whereRaw('andre_id_pinjam = (select max(`andre_id_pinjam`) from andre_pinjams)')->first();

                 $a = AndreInventaris::where('andre_id_inventaris', $req->andre_id_inventaris)->first();

                 // $jumlah = $a - $req->andre_jumlah;

                    if ( $req->andre_jumlah <= $a->andre_jumlah ) {
                    $andre_detil->andre_id_pinjam = $andre_id_pinjam['andre_id_pinjam'];
                    $andre_detil->andre_id_inventaris = $req->andre_id_inventaris;
                    $andre_detil->andre_status = "Dipinjam";
                    $andre_detil->andre_jumlah = $req->andre_jumlah;
                    if ( auth::user()->andre_id_level == 3 ){
                        session()->flash('success-create', 'Peminjaman berhasil, harap menunggu persetujuan dari admin/petugas.');
                    } else {
                        session()->flash('success-create', 'Peminjaman berhasil, barang dipinjamkan.');
                    }
                    $andre_detil->save();

                    return redirect('/pinjam/index');   
                    } else {
                        session()->flash('gagal-create', 'Permintaan barang melebihi stok yang tersedia');
                        return redirect()->back();
                    }


        // $hitung = $req->steps;
        // $hitung2 = count($hitung);

        //     for ($i=0; $i < $hitung2; $i++) {

                

        //         }
        

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($andre_id_pinjam)
    {
        $andre_pinjam = AndrePinjam::find($andre_id_pinjam);
        $andre_detil = AndreDetil::where('andre_id_pinjam', $andre_id_pinjam)->get();

        return view('pinjams/detil', compact('andre_pinjam', 'andre_detil'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($andre_id_pinjam)
    {
        $andre_pinjam  = AndrePinjam::find($andre_id_pinjam);
        $andre_jenis   = AndreJenis::all();
        $andre_ruangs  = AndreRuang::all();
        $andre_petugas = AndrePetugas::all();
        return view('pinjams/edit', compact('andre_pinjam','andre_jenis','andre_ruangs','andre_petugas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $andre_id_pinjam)
    {
        $andre_pinjam = AndrePinjam::find($andre_id_pinjam);
        $andre_pinjam->andre_kode_pinjam = $req->andre_kode_pinjam;
        $andre_pinjam->andre_nama = $req->andre_nama;
        $andre_pinjam->andre_jumlah = $req->andre_jumlah;
        $andre_pinjam->andre_kondisi = $req->andre_kondisi;
        $andre_pinjam->andre_keterangan = $req->andre_keterangan;
        $andre_pinjam->andre_id_jenis = $req->andre_id_jenis;
        $andre_pinjam->andre_id_ruang = $req->andre_id_ruang;
        $andre_pinjam->andre_tanggal_register = $req->andre_tanggal_register;
        $andre_pinjam->save();

        return redirect('/pinjam/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($andre_id_pinjam)
    {
        $andre_pinjam = AndrePinjam::find($andre_id_pinjam);
        $andre_pinjam->delete();

        return redirect('/pinjam/index');
    }

    public function print(){
        $andre_pinjam = AndrePinjam::where('andre_status_persetujuan', 'Disetujui')->get();

        $pdf = PDF::loadview('pinjams/print', compact('andre_pinjam'), ['andre_pinjam' => $andre_pinjam]);

        return $pdf->stream('Cetak Anggota.pdf');
    }

    public function printDetil($andre_id_pinjam){
        $andre_pinjam = AndrePinjam::find($andre_id_pinjam);
        $andre_detil = AndreDetil::where('andre_id_pinjam', $andre_id_pinjam)->get();

        $pdf = PDF::loadview('pinjams/print-detil', compact('andre_pinjam', 'andre_detil'), ['andre_pinjam' => $andre_pinjam]);

        return $pdf->stream('Cetak.pdf');
    }

    public function back(Request $req, $andre_id_detil)
    {
        $andre_detil = AndreDetil::find($andre_id_detil);
        $andre_detil->andre_status = "Dikembalikan";
        $andre_detil->andre_tanggal_kembali = Carbon::now();
        $andre_detil->save();

        $jumlah1 = $andre_detil->inventaris->andre_jumlah;
        $jumlah2 = $andre_detil->andre_jumlah;
        $jumlah = $jumlah1 + $jumlah2;

        $andre_id_inventaris = $andre_detil->andre_id_inventaris;
        $andre_inventaris = AndreInventaris::find($andre_id_inventaris);
        $andre_inventaris->andre_jumlah = $jumlah;
        $andre_inventaris->save();

        
        session()->flash('success-create', 'Barang sudah dikembalikan');
        return redirect()->back(); 
    }
}
