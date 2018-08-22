<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Availability extends Model
{
    //
	protected $table = "products_availability";
	protected $fillable = [
		'product_id',
		'availability',
		'availability_date',
		'cost_of_goods',
		'expiration_date',
		'price',
		'sale_price',
		'sale_price_effective_date',
		'unit_pricing_measure',
	];
}
