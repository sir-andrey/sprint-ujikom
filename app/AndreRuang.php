<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\AndreInventaris;

class AndreRuang extends Model
{
    protected $table = "andre_ruangs";
	protected $primaryKey = "andre_id_ruang";
    protected $fillable = [
    	'andre_nama_ruang',
    	'andre_kode_ruang',
    	'andre_keterangan',
	];

	public function andre_inventaris()
	{
		return $this->hasOne(AndreInventaris::class, 'andre_id_inventaris');
	}
}
