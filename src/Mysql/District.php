<?php

namespace Rentalbro\Models\Mysql;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{

	public function regency()
	{
		return $this->hasOne(Regency::class, 'id', 'regency_id');
	}
}
