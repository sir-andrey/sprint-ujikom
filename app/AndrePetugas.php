<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\AndreLevel;
use App\AndreInventaris;

class AndrePetugas extends Model
{
    protected $table = "andre_petugas";
	protected $primaryKey = "andre_id_petugas";
    protected $fillable = [
    	'andre_id_petugas',
    	'andre_username',
    	'andre_password',
    	'andre_nama_petugas',
    	'andre_id_level',
	];

	public function level()
	{
		return $this->belongsTo(AndreLevel::class, 'andre_id_level', 'andre_id_level');
	}

	public function andre_inventaris()
	{
		return $this->hasOne(AndreInventaris::class, 'andre_id_inventaris');
	}
}
