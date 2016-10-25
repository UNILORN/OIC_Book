<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EMPEDITTABLE extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('EMP_EDIT',function (Blueprint $table){
          $table->increments('emp_edit_id')->unique();
          $table->dateTime('emp_edit_time')->nullable();
          $table->string('emp_edit_password',45)->nullable();
          $table->integer('emp_edit_auth_id')->nullable();
          $table->integer('employee_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('EMP_EDIT');
    }
}
