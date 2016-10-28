<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class METHODOFPAYMENTTABLE extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('METHOD_OF_PAYMENT',function(Blueprint$table){
          $table->increments('method_of_payment_id')->unique();
          $table->string('method_of_payment',45);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('METHOD_OF_PAYMENT');
    }
}
