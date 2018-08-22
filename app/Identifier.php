<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Identifier extends Model
{
	protected $table = "products_identifiers";
	protected $fillable = [
		'product_id',
		'brand',
		'gtin',
		'mpn',
		'identifier_exists',
	];

}
