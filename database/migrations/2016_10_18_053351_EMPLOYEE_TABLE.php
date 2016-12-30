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
            $table->string('employee_password', 255);
            $table->integer('employee_authority')->default(0);//従業員の権限 1:売り上げが見れない 2:売り上げが観れる 3:従業員の新規登録とか変更とか
            $table->string('employee_phone_number');
            $table->boolean('delete_flg')->default(0);
            $table->timestamps();
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
