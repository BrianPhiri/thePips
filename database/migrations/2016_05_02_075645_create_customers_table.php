<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('surname', 25);
            $table->string('othernames', 25);
            $table->string('title', 5);
            $table->string('address', 30);
            $table->string('town', 25);
            $table->string('email', 60)->unique();
            $table->string('password', 60);
            $table->enum('gender', ['Male', 'Female']);
            $table->integer('activation-status')->default(0);
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
        Schema::drop('customers');
    }
}
