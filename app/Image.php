<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //	
    protected $table = "products_images";
    protected $fillable = [
		'product_id',
		'image_link',
	];
	public function product() {
		return $this->belongsTo('App\Product','unique_identifier','product_id');
	}
}
