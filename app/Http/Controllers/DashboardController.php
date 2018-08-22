<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Feed;
class DashboardController extends Controller
{
    public function index()
    {

        $product = Product::all()->count();
        $feed = Feed::all()->count();
        return view('admin.dashboard.index', array('product'=>$product,'feed'=>$feed));


    }
}
