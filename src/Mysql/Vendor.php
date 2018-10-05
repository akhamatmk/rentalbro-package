<?php

namespace Rentalbro\Models\Mysql;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vendor extends Model
{
	use SoftDeletes;

	public function addres()
	{
		return $this->hasOne(VendorLocation::class, 'vendor_id', 'id');
	}
}
