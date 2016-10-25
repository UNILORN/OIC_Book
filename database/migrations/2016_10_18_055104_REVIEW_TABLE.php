<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class REVIEWTABLE extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('REVIEW',function(Blueprint$table){
          $table->increments('review_id')->unique();
          $table->integer('product_id')->nullable();
          $table->integer('user_id')->nullable();
          $table->integer('review')->nullable();
          $table->text('review_text',1000)->nullable();
          $table->dateTime('entry_time')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('REVIEW');
    }
}
