<?php

use Illuminate\Database\Seeder;
use App\Feed;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // Development Testing

        DB::table('users')->delete();
        DB::table('products')->delete();
        DB::table('products_availability')->delete();
        DB::table('products_identifiers')->delete();
        DB::table('products_detailed_description')->delete();
        DB::table('products_images')->delete();

        $feeds = DB::table('feeds')->get();
        foreach ($feeds as $link) {
        $rss = new \DOMDocument();

        echo "Time: ".date('H:i:s')." - ".$link->feed_link."<br>";

        $rss->load($link->feed_link);
        $nodes = $rss->getElementsByTagName('item');
        foreach ($nodes as $node) {

            // Check whether mobile_link exists, assign NULL if not
            if (isset($node->getElementsByTagName('gtin')->item(0)->nodeValue)) {
                $gtin = $node->getElementsByTagName('gtin')->item(0)->nodeValue;
            } else {
                $gtin = 0;
            }

            // Check whether title exists, assign NULL if not
            if (isset($node->getElementsByTagName('title')->item(0)->nodeValue)) {
                $title = $node->getElementsByTagName('title')->item(0)->nodeValue;
            } else {
                $title = NULL;
            }
            
            // Check whether title exists, assign NULL if not
            if (isset($node->getElementsByTagName('description')->item(0)->nodeValue)) {
                $description = $node->getElementsByTagName('description')->item(0)->nodeValue;
            } else {
                $description = NULL;
            }
            // Check whether link exists, assign NULL if not
            if (isset($node->getElementsByTagName('link')->item(0)->nodeValue)) {
                $link = $node->getElementsByTagName('link')->item(0)->nodeValue;
            } else {
                $link = NULL;
            }
            
            // Check whether mobile_link exists, assign NULL if not
            if (isset($node->getElementsByTagName('mobile_link')->item(0)->nodeValue)) {
                $mobile_link = $node->getElementsByTagName('mobile_link')->item(0)->nodeValue;
            } else {
                $mobile_link = NULL;
            }

            // Check whether mobile_link exists, assign NULL if not
            if (isset($node->getElementsByTagName('image_link')->item(0)->nodeValue)) {
                $image_link = $node->getElementsByTagName('image_link')->item(0)->nodeValue;
            } else {
                $image_link = NULL;
            }


            // Populate products table
            App\Product::create(array(
                'unique_identifier' => $gtin,
                'name'              => $title,
                'description'       => $description,
                'link'              => $link,
                'mobile_link'       => $mobile_link,
                'image_link'        => $image_link,
            ));



            // Check whether availability exists, assign NULL if not
            if (isset($node->getElementsByTagName('availability')->item(0)->nodeValue)) {
                $availability = $node->getElementsByTagName('availability')->item(0)->nodeValue;
            } else {
                $availability = NULL;
            }

            // Check whether price exists, assign NULL if not
            if (isset($node->getElementsByTagName('price')->item(0)->nodeValue)) {
                $price = $node->getElementsByTagName('price')->item(0)->nodeValue;
            } else {
                $price = NULL;
            }

            // Check whether sale_price exists, assign NULL if not
            if (isset($node->getElementsByTagName('sale_price')->item(0)->nodeValue)) {
                $sale_price = $node->getElementsByTagName('sale_price')->item(0)->nodeValue;
            } else {
                $sale_price = NULL;
            }


            // Populate pricing & availability associated with each product
            App\Availability::create(array(
                'product_id'    => $gtin,
                'availability'  => $availability,
                'price'         => $price,
                'sale_price'    => $sale_price,
            ));



            // Check whether brand exists, assign NULL if not
            if (isset($node->getElementsByTagName('brand')->item(0)->nodeValue)) {
                $brand = $node->getElementsByTagName('brand')->item(0)->nodeValue;
            } else {
                $brand = NULL;
            }

            // Check whether mpn exists, assign NULL if not
            if (isset($node->getElementsByTagName('mpn')->item(0)->nodeValue)) {
                $mpn = $node->getElementsByTagName('mpn')->item(0)->nodeValue;
            } else {
                $mpn = NULL;
            }

            // Check whether identifier_exists exists, assign NULL if not
            if (isset($node->getElementsByTagName('identifier_exists')->item(0)->nodeValue)) {
                $identifier_exists = $node->getElementsByTagName('identifier_exists')->item(0)->nodeValue;
            } else {
                $identifier_exists = NULL;
            }



            // Populate codes & identifiers associated with each product
            App\Identifier::create(array(
                'product_id'        => $gtin,
                'brand'             => $brand,
                'gtin'              => $gtin,
                'mpn'               => $mpn,
                'identifier_exists' => $identifier_exists,
            ));


            // Check whether condition exists, assign NULL if not
            if (isset($node->getElementsByTagName('condition')->item(0)->nodeValue)) {
                $condition = $node->getElementsByTagName('condition')->item(0)->nodeValue;
            } else {
                $condition = NULL;
            }

            // Check whether adult exists, assign NULL if not
            if (isset($node->getElementsByTagName('adult')->item(0)->nodeValue)) {
                $adult = $node->getElementsByTagName('adult')->item(0)->nodeValue;
            } else {
                $adult = NULL;
            }

            // Check whether color exists, assign NULL if not
            if (isset($node->getElementsByTagName('color')->item(0)->nodeValue)) {
                $color = $node->getElementsByTagName('color')->item(0)->nodeValue;
            } else {
                $color = NULL;
            }

            // Check whether gender exists, assign NULL if not
            if (isset($node->getElementsByTagName('gender')->item(0)->nodeValue)) {
                $gender = $node->getElementsByTagName('gender')->item(0)->nodeValue;
            } else {
                $gender = NULL;
            }

            // Check whether material exists, assign NULL if not
            if (isset($node->getElementsByTagName('material')->item(0)->nodeValue)) {
                $material = $node->getElementsByTagName('material')->item(0)->nodeValue;
            } else {
                $material = NULL;
            }

            // Check whether pattern exists, assign NULL if not
            if (isset($node->getElementsByTagName('pattern')->item(0)->nodeValue)) {
                $pattern = $node->getElementsByTagName('pattern')->item(0)->nodeValue;
            } else {
                $pattern = NULL;
            }

            // Check whether size exists, assign NULL if not
            if (isset($node->getElementsByTagName('size')->item(0)->nodeValue)) {
                $size = $node->getElementsByTagName('size')->item(0)->nodeValue;
            } else {
                $size = NULL;
            }

            // Check whether size_type exists, assign NULL if not
            if (isset($node->getElementsByTagName('size_type')->item(0)->nodeValue)) {
                $size_type = $node->getElementsByTagName('size_type')->item(0)->nodeValue;
            } else {
                $size_type = NULL;
            }

            // Check whether size_system exists, assign NULL if not
            if (isset($node->getElementsByTagName('size_system')->item(0)->nodeValue)) {
                $size_system = $node->getElementsByTagName('size_system')->item(0)->nodeValue;
            } else {
                $size_system = NULL;
            }



            // Populate additional details associated with each product
            App\Detail::create(array(
                'product_id'    => $gtin,
                'condition'     => $condition,
                'adult'         => $adult,
                'color'         => $color,
                'gender'        => $gender,
                'material'      => $material,
                'pattern'       => $pattern,
                'size'          => $size,
                'size_type'     => $size_type,
                'size_system'   => $size_system,
            ));
            

            
            // start count
            $i = 0;
            // define title element to keep within scope
            $alt = $node->getElementsByTagName('title')->item(0)->nodeValue;
            // check whether there's at least one additional image..
            if (isset($node->getElementsByTagName('additional_image_link')->item(0)->nodeValue)) {
                // if >=1 additional image found, loop through and add to DB (1-to-many)
                foreach ($node->getElementsByTagName('additional_image_link') as $node_additional) {
                App\Image::create(array(
                    'product_id'                => $gtin,
                    'image_link'                => $node->getElementsByTagName('additional_image_link')->item($i)->nodeValue,
                    'image_alt'                 => $alt,
                ));
                $i++;
                }
            }
        }

    }

        /*$rss = new \DOMDocument();
        $rss->load(public_path().'/alapaine.xml');
        $nodes = $rss->getElementsByTagName('item');
        foreach ($nodes as $node) {
            $title[] = $node->getElementsByTagName('title')->item(0)->nodeValue;
            $description[] = $node->getElementsByTagName('description')->item(0)->nodeValue;
            $product_type[] = $node->getElementsByTagName('product_type')->item(0)->nodeValue;
            $link[] = $node->getElementsByTagName('link')->item(0)->nodeValue;
        }
*/

        /*factory(App\Product::class, 50)->create()->each(function($p) {
        	$p->save();
        });*/
    }
}
