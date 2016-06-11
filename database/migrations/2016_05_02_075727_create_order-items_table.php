<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order-items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id')->unsigned();            
            $table->integer('products_id')->unsigned();
            $table->integer('quantity');
            $table->decimal('price', 10,2);
            $table->timestamps();
            $table->foreign('order_id')->references('id')->on('orders');
            $table->foreign('products_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('order-items');
    }
}
