<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class AndreLevel extends Model
{
    protected $table = "andre_levels";
	protected $primaryKey = "andre_id_level";
    protected $fillable = [
    	'andre_nama_level',
	];

	public function user()
	{
		return $this->hasOne(User::class, 'id');
	}
}
