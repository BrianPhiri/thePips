<?php

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
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('sub_category_id')->unsigned();
            $table->decimal('price', 10,2);
            $table->text('description');
            $table->string('image');
            $table->string('product-state');
            $table->string('place');
            // $table->softDelets();
            $table->timestamps();
        });
        Schema::table('products', function (Blueprint $table) {
          $table->foreign('sub_category_id')->references('id')->on('subcategories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }
}
