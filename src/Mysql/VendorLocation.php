<?php

namespace Rentalbro\Models\Mysql;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VendorLocation extends Model
{
	use SoftDeletes;

	public function district()
	{
		return $this->hasOne(District::class, 'id', 'district_id');
	}
}
