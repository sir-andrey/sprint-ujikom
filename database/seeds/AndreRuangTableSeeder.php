<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AndreRuangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('andre_ruangs')->insert([
            'andre_nama_ruang' => 'Lab RPL 1',
            'andre_kode_ruang' => 'R34555',
            'andre_keterangan' => ' ',
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now(),
            ]);
            
            DB::table('andre_ruangs')->insert([
            'andre_nama_ruang' => 'Lab RPL 2',
            'andre_kode_ruang' => 'R34972',
            'andre_keterangan' => ' ',
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now(),
            ]); 

            DB::table('andre_ruangs')->insert([
            'andre_nama_ruang' => 'Lab RPL 3',
            'andre_kode_ruang' => 'R34672',
            'andre_keterangan' => ' ',
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now(),
            ]); 

            DB::table('andre_ruangs')->insert([
            'andre_nama_ruang' => 'Gudang',
            'andre_kode_ruang' => 'R34122',
            'andre_keterangan' => ' ',
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now(),
            ]); 

            DB::table('andre_ruangs')->insert([
            'andre_nama_ruang' => 'Masjid',
            'andre_kode_ruang' => 'R30982',
            'andre_keterangan' => ' ',
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now(),
            ]); 

            DB::table('andre_ruangs')->insert([
            'andre_nama_ruang' => 'Lab Meka 1',
            'andre_kode_ruang' => 'R34231',
            'andre_keterangan' => ' ',
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now(),
            ]); 
    }
}
