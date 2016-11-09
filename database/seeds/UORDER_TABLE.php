<?php

use Illuminate\Database\Seeder;
use App\UORDER;
class UORDER_TABLE extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('UORDER')->delete();

       //faker使う。普通に使う場合と同じ。
      $faker = Faker\Factory::create('ja_JP');

      for($i=0; $i<100; $i++)
      {
          DB::table('UORDER')->insert([
            'user_id'=>$i,
            'uorder_day'=>$faker->dateTimeThisCentury(),
            'uorder_price'=>$faker->randomDigitNotNull()*100,
            'uorder_use_point'=>$faker->randomDigitNotNull()*10,
            'uorder_add_point'=>$faker->randomDigitNotNull(),
            'uorder_payment'=>$faker->boolean(),
            'uorder_cancel'=>$faker->boolean(),
            'uorder_auth_cancel'=>$faker->boolean(),
            'method_of_payment_id'=>$i
          ]);
      }
    }
}
