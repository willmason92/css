<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsDetailedDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_detailed_description', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product_id',25);
            $table->string('condition',25)->nullable(true);
            $table->integer('adult')->unsigned()->nullable(true);
            $table->string('color')->nullable(true);
            $table->string('gender')->nullable(true);
            $table->string('material')->nullable(true);
            $table->string('pattern')->nullable(true);
            $table->string('size')->nullable(true);
            $table->string('size_type')->nullable(true);
            $table->string('size_system')->nullable(true);
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
        Schema::dropIfExists('products_detailed_description');
    }
}
