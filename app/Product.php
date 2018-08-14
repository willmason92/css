<?php

namespace Laravel;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $table = "products";
	protected $fillable = [
		'unique_identifier',
		'category',
		'name',
		'description',
		'price',
		'image'
	];

}
