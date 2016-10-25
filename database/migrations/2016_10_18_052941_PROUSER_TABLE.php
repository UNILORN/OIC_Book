<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PROUSERTABLE extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PROUSER',function (Blueprint $table){
          $table->increments('pro_id')->unique();
          $table->string('e-mail',45)->nullable();
          $table->dateTime('time_limit')->nullable();
          $table->string('pro_token', 45)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('PROUSER');
    }
}
