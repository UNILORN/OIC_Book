<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PRODUCTEDITTABLE extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PRODUCT_EDIT',function(Blueprint$table){
          $table->increments('product_edit_id')->unique();
          $table->integer('product_id');
          $table->dateTime('product_edit_time');
          $table->integer('employee_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('PRODUCT_EDIT');
    }
}
