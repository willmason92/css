<?php

use Illuminate\Database\Seeder;

class FeedsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         if(DB::table('feeds')->get()->count() == 0){

            DB::table('feeds')->insert([

                /*[
                    'feed_link' => 'https://www.alanpaine.co.uk/feeds/google/shopping_gbp.xml',
                    'company' => 'Alan Paine',
                    'last_update' => NULL,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],*/
                [
                    'feed_link' => 'https://www.internetgardener.co.uk/feeds/googlemerchantcenter/googlemerchant.xml',
                    'company' => 'Internet Gardener',
                    'last_update' => NULL,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                /*[
                    'feed_link' => 'https://www.hartsfurniture.co.uk/feeds/GoogleShopping.xml',
                    'company' => 'Harts Furniture',
                    'last_update' => NULL,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'feed_link' => 'https://www.wearall.com/feeds/GoogleShopping_UK.xml',
                    'company' => 'Wear All',
                    'last_update' => NULL,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],*/

            ]);

        } else { echo "Feeds Table is not empty, therefore NOT "; }

    }
}
