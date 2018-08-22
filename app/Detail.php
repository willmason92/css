<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{	
	protected $table = "products_detailed_description";
	protected $fillable = [
		'product_id',
		'condition',
		'adult',
		'color',
		'gender',
		'material',
		'pattern',
		'size',
		'size_type',
		'size_system',
	];

}
