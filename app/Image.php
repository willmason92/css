<?php

namespace Laravel;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //	
    protected $table = "products_images";
    protected $fillable = [
		'product_id',
		'image_link',
	];
}
