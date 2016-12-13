<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EMPLOYEETABLE extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('EMPLOYEE', function (Blueprint $table) {
            $table->increments('employee_id')->unique();
            $table->string('employee_email')->unique();
            $table->string('employee_name');
            $table->string('employee_password', 45)->unique();
            $table->string('employee_phone_number');
            $table->boolean('delete_flg')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('EMPLOYEE');
    }
}
