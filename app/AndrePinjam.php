<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\AndreDetil;
use App\AndrePegawai;

class AndrePinjam extends Model
{
    protected $table = "andre_pinjams";
	protected $primaryKey = "andre_id_pinjam";
    protected $fillable = [
    	'andre_tanggal_pinjam',
    	'andre_tanggal_kembali',
    	'andre_status_peminjaman',
    	'andre_id_pegawai',
	];

	public function andre_detil()
	{
		return $this->hasOne(AndreDetil::class, 'andre_id_detil');
	}

	public function andre_pegawai()
	{
		return $this->belongsTo(AndrePegawai::class, 'andre_id_pegawai', 'andre_id_pegawai');
	}
}
