<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AndreJenisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('andre_jenis')->insert([
            'andre_nama_jenis' => 'Elektronik',
            'andre_kode_jenis' => 'J08722',
            'andre_keterangan' => ' ',
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now(),
            ]);

            DB::table('andre_jenis')->insert([
            'andre_nama_jenis' => 'Alat Tulis Kantor',
            'andre_kode_jenis' => 'J08756',
            'andre_keterangan' => ' ',
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now(),
            ]);

            DB::table('andre_jenis')->insert([
            'andre_nama_jenis' => 'Peralatan Dapur',
            'andre_kode_jenis' => 'J08723',
            'andre_keterangan' => ' ',
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now(),
            ]);

            DB::table('andre_jenis')->insert([
            'andre_nama_jenis' => 'Alat Berat',
            'andre_kode_jenis' => 'J08123',
            'andre_keterangan' => ' ',
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now(),
            ]);

            DB::table('andre_jenis')->insert([
            'andre_nama_jenis' => 'Alat Kebersihan',
            'andre_kode_jenis' => 'J08908',
            'andre_keterangan' => ' ',
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now(),
            ]);

            DB::table('andre_jenis')->insert([
            'andre_nama_jenis' => 'Perangkat Suara',
            'andre_kode_jenis' => 'J08738',
            'andre_keterangan' => ' ',
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now(),
            ]);
    }
}
