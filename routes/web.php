<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Http\Request;
use Laravel\Data;
use Laravel\Product;
Route::get('/', function () {
    return view('welcome');
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

Route::post('/vueitems', function(Request $req){
   $posts = new Data();
   $posts->title  = $req->title;
   $posts->link  = $req->link;
   $posts->image  = $req->image;
   $posts->save();
});
Route::get('/vueitems',function(){
  $posts = Data::all();
  return $posts;
});
Route::get('/getproducts',function(){
  $products = Product::all();
  return $products;
});

Route::post('/getproducts', function(Request $req){
   $products = new Data();
   $products->name  = $req->name;
   $products->description  = $req->description;
   $products->units  = $req->units;
   $products->price  = $req->price;
   $products->image  = $req->image;
   $products->save();
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
