<?php

namespace Rentalbro\Models\Mysql;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	public function price()
	{
		return $this->hasMany(ProductPrice::class, 'product_id', 'id');
	}
}
