<?php

namespace Rentalbro\Models\Mysql;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductOptionXref extends Model
{
	protected $table = 'product_option_xref';

	public function option()
	{
		return $this->hasOne(ProductOption::class, 'id', 'product_option_id');
	}

	public function optionValue()
	{
		return $this->hasOne(ProductOptionValue::class, 'id', 'product_option_value_id');
	}
}
