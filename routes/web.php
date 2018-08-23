<?php

use App\User;
use App\Product;
use App\Image;
use App\Detail;
use Illuminate\Support\Facades\Input;
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

Route::get ( '/', function () {
	$dummyDetails = Product::with('availability')->paginate(25);

	return view ( 'welcome' )->withProducts($dummyDetails);
} );
Route::any ( '/search', function () {
	$q = Input::get ( 'q' );
	if($q != ""){
	$product = Product::where ( 'name', 'LIKE', '%' . $q . '%' )->orWhere ( 'description', 'LIKE', '%' . $q . '%' )->paginate (15)->setPath ( '' );
	$pagination = $product->appends ( array (
				'q' => Input::get ( 'q' ) 
		) );
	if (count ( $product ) > 0)
		return view ( 'welcome' )->withDetails ( $product )->withQuery ( $q );
	}
		return view ( 'welcome' )->withMessage ( 'No Details found. Try to search again !' );
} );