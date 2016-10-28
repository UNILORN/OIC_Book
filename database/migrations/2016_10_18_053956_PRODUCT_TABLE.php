<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PRODUCTTABLE extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PRODUCT',function(Blueprint$table){
          $table->increments('product_id')->unique();
          $table->string('product_name');
          $table->integer('genre_id');
          $table->string('product_image',45);
          $table->integer('product_price');
          $table->integer('product_stock');
          $table->integer('ISBN');
          $table->integer('trancelater_id');
          $table->integer('product_height');
          $table->integer('product_width');
          $table->integer('product_depth');
          $table->integer('product_page');
          $table->dateTime('product_start_day');
          $table->text('product_explanation',1000);
          $table->integer('product_browse＿number');
          $table->integer('product_order_number');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('PRODUCt');
    }
}
