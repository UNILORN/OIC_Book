<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class USERTABLE extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('USER',function (Blueprint $table){
          $table->increments('user_id')->unique();
          $table->string('user_name',45)->nullable();
          $table->string('user_email',45)->nullable();
          $table->string('user_password',45)->nullable();
          $table->string('user_post_code',45)->nullable();
          $table->string('user_address',45)->nullable();
          $table->string('user_phone_number',45)->nullable();
          $table->integer('user_point')->nullable();
          $table->time('user_last_login')->nullable();
          $table->integer('employee_id')->nullable();
          $table->boolean('user_recede_flug')->nullable();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('USER');
    }
}
