<?php

namespace Rentalbro\Models\Mysql;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	public function price()
	{
		return $this->hasMany(ProductPrice::class, 'product_id', 'id');
	}

	public function media()
	{
		return $this->hasMany(Media::class, 'relation_id', 'id');
	}

	public function category()
	{
		return $this->hasMany(ProductCategory::class, 'product_id', 'id');
	}

	public function catalog()
	{
		return $this->hasOne(Catalogue::class, 'id', 'catalog_id');
	}

	public function xref()
	{
		return $this->hasMany(ProductOptionXref::class, 'product_id', 'id');
	}

	public function vendor()
	{
		return $this->hasOne(Vendor::class, 'id', 'vendor_id');
	}
}