<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $table = "products";
	protected $fillable = [
		'unique_identifier',
		'name',
		'description',
		'link',
		'mobile_link',
		'image_link',
	];
	
}
