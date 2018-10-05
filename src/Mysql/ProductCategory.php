<?php

namespace Rentalbro\Models\Mysql;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductCategory extends Model
{
	use SoftDeletes;
	protected $table = 'product_category';

	public function category()
	{
		return $this->hasOne(Category::class, 'id', 'category_id');
	}
}
