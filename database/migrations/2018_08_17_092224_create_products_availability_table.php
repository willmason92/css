<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsAvailabilityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_availability', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product_id',25);
            $table->string('availability',50);
            $table->string('price',25)->nullable(false);
            $table->string('sale_price',25)->nullable(true);
            $table->timestamps();

            
            //$table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products_availability');
    }
}
