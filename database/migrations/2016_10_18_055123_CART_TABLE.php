<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CARTTABLE extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CART',function(Blueprint$table){
          $table->increments('cart_id')->unique();
          $table->integer('user_id')->nullable();
          $table->integer('product_id')->nullable();
          $table->integer('product_cart_number')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('CART');
    }
}
