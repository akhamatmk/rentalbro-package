<?php

namespace Rentalbro\Models\Mysql;

use Illuminate\Database\Eloquent\Model;

class CatalogueCategory extends Model
{
	protected $table = 'catalogue_category';

	public function category()
	{
		return $this->hasOne(Category::class, 'id', 'category_id');
	}

}
