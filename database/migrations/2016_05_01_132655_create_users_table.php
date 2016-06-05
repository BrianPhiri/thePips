<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('title_id')->unsigned();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->boolean('verified')->default(false);
            $table->string('token')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::table('users', function (Blueprint $table)
        {
            $table->foreign('title_id')->references('id')->on('title');
        });
        
        Schema::table('users', function(Blueprint $table){
            $table->string('stripe_id')->nullable();
            $table->string('card_brand')->nullable();
            $table->string('card_last_four')->nullable();
            $table->timestamp('trial_ends_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
