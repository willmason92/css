<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('unique_identifier', 100);
            $table->string('prefix_code');
            $table->integer('category');
            $table->string('name');
            $table->string('description', 100);
            $table->double('price');
            $table->string('image');
            $table->timestamps();
        });*/
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('unique_identifier');
            $table->string('category');
            $table->string('name',100);
            $table->string('description',4000);
            $table->string('price');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}

