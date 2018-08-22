<?php

use App\Product;
use App\Image;
use App\Detail;
Route::get('/', function () {
    return view('welcome');
});

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Auth::routes();

/*
|------------------------------------------------------------------------------------
| Admin
|------------------------------------------------------------------------------------
*/
Route::group(['prefix' => ADMIN, 'as' => ADMIN . '.', 'middleware'=>['auth', 'Role:0']], function() {
    Route::get('/', 'DashboardController@index')->name('dash');
    Route::resource('users', 'UserController');
    Route::resource('feeds', 'FeedController');
});

Route::get('product', function()
{
  return View::make('product');
});
Route::get('products/{id}', function($id)
{
  return View::make('product', compact('id'));
});
Route::resource('product','ProductController');

/*Route::get('/getproducts',function(){
  $products = Product::all()->take(10);
  $detail = Detail::all()->take(10);
  return compact('products','detail');
});*/

Route::get('/getproducts',function(){
  $products = Product::all()->take(10);
  $detail = Detail::all()->take(10);
  $data = array($products,$detail);
  return $data;
});

