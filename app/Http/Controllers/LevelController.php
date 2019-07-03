<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AndreLevel;
use PDF;

class LevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $andre_levels = AndreLevel::all();

        return view('levels/index', compact('andre_levels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('levels/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $andre_level = new AndreLevel;
        $andre_level->andre_nama_level = $req->andre_nama_level;
        $andre_level->save();

        return redirect('/level/index');
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
    public function edit($andre_id_level)
    {
        $andre_level = AndreLevel::find($andre_id_level);

        return view('levels/edit', compact('andre_level'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $andre_id_level)
    {
        $andre_level = AndreLevel::find($req->andre_id_level);
        $andre_level->andre_nama_level = $req->andre_nama_level;
        $andre_level->save();

        return redirect('/level/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($andre_id_level)
    {
        $andre_level = AndreLevel::find($andre_id_level);
        $andre_level->delete();

        return redirect('/level/index');
    }

    public function print(){
        $andre_level = AndreLevel::all();

        $pdf = PDF::loadview('levels/print', compact('andre_level'), ['andre_level' => $andre_level]);

        return $pdf->stream('Cetak Anggota.pdf');
    }
}
