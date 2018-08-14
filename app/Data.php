<?php

namespace Laravel;

use Illuminate\Database\Eloquent\Model;

class Data extends Model 
{
	protected $table = "posts";
	public $timestamps = false;
}
