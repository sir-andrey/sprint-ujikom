<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'name' => 'Administrator',
        	'email' => 'admin@mail.com',
        	'username' => 'admin',
        	'andre_id_level' => '1',
        	'password' => '$2y$10$2agbYlfLenAtqluoFEcRku9e6F.1MLOwh8ATHvmI8GVOpf/HgEC/i',
        	'remember_token' => '1',
        	'created_at'	=> Carbon::now(),
        	'updated_at'	=> Carbon::now(),
        ]);

        DB::table('andre_petugas')->insert([
        	'andre_id_petugas' => '1',	
        	'andre_nama_petugas' => 'Administrator',
        	'andre_email' => 'admin@mail.com',
        	'andre_username' => 'admin',
        	'andre_id_level' => '1',
        	'andre_password' => '$2y$10$2agbYlfLenAtqluoFEcRku9e6F.1MLOwh8ATHvmI8GVOpf/HgEC/i',
        	'andre_nip' => '082365672145',
        	'andre_alamat' => 'Central Java',
        	'created_at'	=> Carbon::now(),
        	'updated_at'	=> Carbon::now(),
		]);
		
		DB::table('users')->insert([
        	'name' => 'John Doe',
        	'email' => 'petugas@mail.com',
        	'username' => 'petugas',
        	'andre_id_level' => '2',
        	'password' => '$2y$10$8MEr/ayQFdpEbcJ1qFTM0eqZpdnaJJFCys902q2ZxGXrGkFWgaHQq',
        	'remember_token' => '1',
        	'created_at'	=> Carbon::now(),
        	'updated_at'	=> Carbon::now(),
        ]);

        DB::table('andre_petugas')->insert([
        	'andre_id_petugas' => '2',	
        	'andre_nama_petugas' => 'John Doe',
        	'andre_email' => 'petugas@mail.com',
        	'andre_username' => 'petugas',
        	'andre_id_level' => '2',
        	'andre_password' => '$2y$10$8MEr/ayQFdpEbcJ1qFTM0eqZpdnaJJFCys902q2ZxGXrGkFWgaHQq',
        	'andre_nip' => '086765676545',
        	'andre_alamat' => 'Western Java',
        	'created_at'	=> Carbon::now(),
        	'updated_at'	=> Carbon::now(),
		]);
		
		DB::table('users')->insert([
        	'name' => 'Antonov Gaurov',
        	'email' => 'pegawai@mail.com',
        	'username' => 'pegawai',
        	'andre_id_level' => '3',
        	'password' => '$2y$10$T820vkGSFbSx6psBAMZ5N.ikI9.eChkMqTphwtZZNHooFyABiUH3G',
        	'remember_token' => '1',
        	'created_at'	=> Carbon::now(),
        	'updated_at'	=> Carbon::now(),
        ]);

        DB::table('andre_pegawais')->insert([
        	'andre_id_pegawai' => '3',	
        	'andre_nama_pegawai' => 'Antonov Gaurov',
        	'andre_email' => 'pegawai@mail.com',
        	'andre_username' => 'pegawai',
        	'andre_password' => '$2y$10$T820vkGSFbSx6psBAMZ5N.ikI9.eChkMqTphwtZZNHooFyABiUH3G',
        	'andre_nip' => '089865454422',
        	'andre_alamat' => 'Eastern Java',
        	'created_at'	=> Carbon::now(),
        	'updated_at'	=> Carbon::now(),
        ]);
    }
}
