<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\AndreInventaris;

class AndreJenis extends Model
{
    protected $table = "andre_jenis";
	protected $primaryKey = "andre_id_jenis";
    protected $fillable = [
    	'andre_nama_jenis',
    	'andre_kode_jenis',
    	'andre_keterangan',
	];

	public function andre_inventaris()
	{
		return $this->hasOne(AndreInventaris::class, 'andre_id_inventaris');
	}
}
