<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UORDERDETAILSTABLE extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('UORDERDETAILS',function(Blueprint$table){
        $table->increments('uorder_details_id')->unique();
        $table->integer('uorder_id');
        $table->integer('product_id');
        $table->integer('uorder_number');
        $table->boolean('uorder_details_flug');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::drop('UORDERDETAILS');

    }
}
