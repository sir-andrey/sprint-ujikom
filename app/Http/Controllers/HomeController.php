<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AndrePinjam;
use App\AndreInventaris;
use App\AndreDetil;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $pinjam = AndrePinjam::all();
        $inventaris = AndreInventaris::all();
        $detil = AndreDetil::all();

        $pending = DB::table('andre_pinjams')->where('andre_status_persetujuan', 'Pending');

        $rusak = DB::table('andre_inventaris')->where('andre_kondisi', '=', 'rusak');

        return view('home', compact('pinjam', 'inventaris', 'detil', 'rusak', 'pending'));
    }
}
