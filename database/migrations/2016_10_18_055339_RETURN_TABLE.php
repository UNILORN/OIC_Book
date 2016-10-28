<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RETURNTABLE extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('RETURN',function(Blueprint$table){
          $table->increments('return_id')->unique();
          $table->integer('vender_id');
          $table->integer('product_id');
          $table->integer('return_number');
          $table->dateTime('return_time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('RETURN');
    }
}
