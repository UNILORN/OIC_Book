<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ORDERTABLE extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ORDER', function (Blueprint $table) {
            $table->increments('order_id')->unique();
            $table->integer('vender_id');
            $table->integer('employee_id');
            $table->integer('product_id');
            $table->integer('order_number');
            $table->dateTime('order_day');
            $table->dateTime('arrive_plan');
            $table->integer('remaining_amount');
            $table->boolean('order_flug');
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
        Schema::drop('ORDER');
    }
}
