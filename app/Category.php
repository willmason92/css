<?php

namespace Laravel;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //	
	protected $table = "products_categories";
    protected $fillable = [
		'product_id',
		'product_category',
	];
}
