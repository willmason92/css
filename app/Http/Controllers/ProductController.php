<?php

namespace Laravel\Http\Controllers;

use Laravel\Http\Controllers\Controller;
use Laravel\Product;
use Laravel\Image;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /*
        $rss = new \DOMDocument();
        $rss->load(public_path().'/alapaine.xml');
        $nodes = $rss->getElementsByTagName('item');
        foreach ($nodes as $node) {
            $title[] = $node->getElementsByTagName('title')->item(0)->nodeValue;
        }
        var_dump($nodes->length);die;
*/

        #$product = Product::find($id);
        $product = Product::where('unique_identifier', '=', $id)->first();
        $product_images = Image::where('product_id','=',$id)->get();;
        return view('products.show', array('product' => $product, 'images' => $product_images /*, 'title' => $title*/));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
