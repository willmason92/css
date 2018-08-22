<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsIdentifiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_identifiers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product_id',25);
            $table->string('brand',70)->nullable(true);
            $table->string('gtin',25)->nullable(true);
            $table->string('mpn',70)->nullable(true);
            $table->string('identifier_exists',25)->nullable(true);
            $table->timestamps();


            //$table->foreign('product_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products_identifiers');
    }
}
