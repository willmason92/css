<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $table = "products";
	protected $with = ['availability'];
	protected $fillable = [
		'unique_identifier',
		'name',
		'description',
		'link',
		'mobile_link',
		'image_link',
	];
	public function detail() {
		return $this->hasOne('App\Detail','product_id','unique_identifier');
	}
	public function availability() {
		return $this->hasOne('App\Availability','product_id','unique_identifier');
	}
	public function image() {
		return $this->hasMany('App\Image','product_id','unique_identifier');
	}
}
