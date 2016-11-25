<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AUTHERCROSSTABLE extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('AUTHERCROSS',function(Blueprint$table){
          $table->integer('auther_id');
          $table->integer('product_id');
          $table->string('auther_cross',45);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('AUTHERCROSS');
    }
}
