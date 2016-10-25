<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class POSTTABLE extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('POST',function(Blueprint$table){
          $table->increments('post_id')->unique();
          $table->integer('product_id')->nullable();
          $table->dateTime('show_start_time')->nullable();
          $table->dateTime('show_end_time')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('POST');
    }
}
