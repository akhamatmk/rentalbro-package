<?php

namespace Rentalbro\Models\Mysql;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductOption extends Model
{
	public function value()
	{
		return $this->hasMany(ProductOptionValue::class, 'product_option_id', 'id')->orderBy('order', 'ASC');
	}
}
