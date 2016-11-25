<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ARRIVETABLE extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ARRIVE',function(Blueprint$table){
          $table->increments('arrive_id')->unique();
          $table->integer('order_id');
          $table->integer('employee_id');
          $table->integer('arrive_number');
          $table->dateTime('arrive_day');
          $table->integer('arrive_price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ARRIVE');
    }
}
