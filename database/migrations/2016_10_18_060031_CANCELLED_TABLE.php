<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CANCELLEDTABLE extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('CANCELLED', function (Blueprint $table) {
          $table->increments('cancelled_id')->unique();
          $table->integer('uorder_id');
          $table->boolean('cancell_flag');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::drop('CANCELLED');
    }
}
