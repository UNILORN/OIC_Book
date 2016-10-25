<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VENDORTABLE extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('VENDOR',function(Blueprint $table){
          $table->increments('vendor_id')->unique();
          $table->string('vendor_name',45)->nullable();
          $table->string('vendor_email',45)->nullable();
          $table->string('vendor_address',45)->nullable();
          $table->string('vendor_phone_number',45)->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('VENDOR');
    }
}
