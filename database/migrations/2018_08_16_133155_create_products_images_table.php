<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        //$table->engine = 'InnoDB';
        Schema::create('products_images', function (Blueprint $table) {
            /*$table->engine = 'InnoDB';*/
            $table->increments('id');
            $table->bigInteger('product_id')->unsigned()->nullable();
            /*$table->foreign('product_id')->references('unique_identifier')->on('products')->onDelete('cascade');*/
            $table->string('image_link',2000);
            $table->string('image_alt',2000);
            $table->timestamps();
        });

        /*Schema::table('products_images', function ($table) {
       });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        //$table->engine = 'InnoDB';
        Schema::dropIfExists('products_images');
        //$table->dropForeign('products_images_product_id_foreign');
        //$table->dropIndex('products_images_product_id_index');
        //$table->dropColumn('product_id');
    }
}
