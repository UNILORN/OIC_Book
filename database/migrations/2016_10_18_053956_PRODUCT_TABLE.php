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
          $table->string('product_name')->nullable();
          $table->integer('genre_id')->nullable();
          $table->string('product_image',45)->nullable();
          $table->integer('product_price')->nullable();
          $table->integer('product_stock')->nullable();
          $table->integer('ISBN')->nullable();
          $table->integer('trancelater_id')->nullable();
          $table->integer('product_height')->nullable();
          $table->integer('product_width')->nullable();
          $table->integer('product_depth')->nullable();
          $table->integer('product_page')->nullable();
          $table->dateTime('product_start_day')->nullable();
          $table->text('product_explanation',1000)->nullable();
          $table->integer('product_browse＿number')->nullable();
          $table->integer('product_order_number')->nullable();
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
