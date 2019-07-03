<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\AndrePinjam;

class AndrePegawai extends Model
{
    protected $table = "andre_pegawais";
	protected $primaryKey = "andre_id_pegawai";
    protected $fillable = [
    	'andre_id_pegawai',
    	'andre_nama_pegawai',
    	'andre_nip',
    	'andre_alamat',
    ];

    public function andre_pinjam()
	{
		return $this->hasOne(Sampinjam::class, 'andre_id_pinjam');
	}
}
