<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AndreLevelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('andre_levels')->insert([
        	'andre_nama_level' => 'Administrator',
        	'created_at'	=> Carbon::now(),
        	'updated_at'	=> Carbon::now(),
        ]);

        DB::table('andre_levels')->insert([
        	'andre_nama_level' => 'Operator',
        	'created_at'	=> Carbon::now(),
        	'updated_at'	=> Carbon::now(),
        ]);

        DB::table('andre_levels')->insert([
        	'andre_nama_level' => 'Pegawai',
        	'created_at'	=> Carbon::now(),
        	'updated_at'	=> Carbon::now(),
        ]);
    }
}
