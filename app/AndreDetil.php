<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\AndrePinjam;

class AndreDetil extends Model
{
    protected $table = "andre_detils";
	protected $primaryKey = "andre_id_detil";
  	protected $fillable = [
    	'andre_id_inventaris',
    	'andre_id_pinjam',
    	'andre_status',
    	'andre_jumlah',
	];

	public function pinjam()
	{
		return $this->belongsTo(AndrePinjam::class, 'andre_id_pinjam', 'andre_id_pinjam');
	}

	public function inventaris()
	{
		return $this->belongsTo(AndreInventaris::class, 'andre_id_inventaris', 'andre_id_inventaris');
	}
}
