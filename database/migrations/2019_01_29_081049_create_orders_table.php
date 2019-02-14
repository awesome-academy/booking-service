<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('fullname');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->string('payment');
            $table->integer('status');
            $table->date('time_in');
            $table->date('time_out');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('room_id')->unsigned();
            $table->foreign('room_id')->references('id')->on('rooms');
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
        Schema::dropIfExists('orders');
    }
}
