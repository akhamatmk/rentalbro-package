<?php

namespace Rentalbro\Models\Mysql;

use Illuminate\Database\Eloquent\Model;

class Chart extends Model
{
	public function product()
	{
		return $this->hasOne(Product::class, 'id', 'product_id');
	}	
}