<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\AndreJenis;
use App\AndreRuang;
use App\AndrePetugas;

class AndreInventaris extends Model
{
    protected $table = "andre_inventaris";
    protected $primaryKey = "andre_id_inventaris";
    protected $fillable = [
    	'andre_nama',
    	'andre_kondisi',
    	'andre_keterangan',
    	'andre_jumlah',
    	'andre_id_jenis',
    	'andre_tanggal_register',
    	'andre_id_ruang',
    	'andre_kode_inventaris',
    	'andre_id_petugas',
	];

    public function jenis()
    {
        return $this->belongsTo(AndreJenis::class, 'andre_id_jenis', 'andre_id_jenis');
    }

    public function ruang()
    {
        return $this->belongsTo(AndreRuang::class, 'andre_id_ruang', 'andre_id_ruang');
    }

    public function petugas()
    {
        return $this->belongsTo(AndrePetugas::class, 'andre_id_petugas', 'andre_id_petugas');
    }

    public function inventaris()
    {
        return $this->hasOne(AndrePinjam::class, 'andre_id_inventaris');
    }
}
