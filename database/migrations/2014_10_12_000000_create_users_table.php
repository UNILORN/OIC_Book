<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->string('user_post_code',45)->nullable();
            $table->string('user_address',45)->nullable();
            $table->string('user_phone_number',45)->nullable();
            $table->integer('user_point')->nullable();
            $table->integer('employee_id')->nullable();
            $table->boolean('user_recede_flug')->nullable();
            $table->boolean('delete_flg')->default(0);
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
