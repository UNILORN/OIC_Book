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
          $table->dateTime('emp_edit_time');
          $table->string('emp_edit_password',45);
          $table->integer('emp_edit_auth_id');
          $table->integer('employee_id_from');
          $table->integer('employee_id_to');
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
