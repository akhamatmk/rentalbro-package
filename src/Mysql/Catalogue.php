<?php

namespace Rentalbro\Models\Mysql;

use Illuminate\Database\Eloquent\Model;

class Catalogue extends Model
{
	protected $table = 'catalogues';

	public function catalogueCategory()
	{
		return $this->hasMany(CatalogueCategory::class, 'catalogue_id', 'id');
	}
}
