<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class INSPECTIONTABLE extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('INSPECTION',function(Blueprint$table){
        $table->increments('inspection_id')->unique();
        $table->boolean('inspection_flug');
        $table->integer('employee_id');
        $table->dateTime('inspection_day');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::drop('INSPECTION');

    }
}
