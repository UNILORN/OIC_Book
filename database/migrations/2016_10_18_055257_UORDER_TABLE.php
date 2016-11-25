<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UORDERTABLE extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('UORDER',function(Blueprint $table){
          $table->increments('uorder_id')->unique();
          $table->integer('user_id');
          $table->dateTime('uorder_day');
          $table->integer('uorder_price');
          $table->integer('uorder_use_point');
          $table->integer('uorder_add_point');
          $table->boolean('uorder_payment');
          $table->boolean('uorder_cancel');
          $table->boolean('uorder_auth_cancel');
          $table->integer('method_of_payment_id');
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
        Schema::drop('UORDER');
    }
}
