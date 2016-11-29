<?php

use Illuminate\Database\Seeder;
use App\ORDER;
class ORDER_TABLE extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('ORDER')->delete();

       //faker使う。普通に使う場合と同じ。
      $faker = Faker\Factory::create('ja_JP');

      for($i=1; $i<=100; $i++)
      {
          DB::table('ORDER')->insert([
            'order_id'=>$i,
            'vender_id'=>$i,
            'employee_id'=>$i%50,
            'product_id'=>$i,
            'order_number'=>$faker->randomDigitNotNull(),
            'order_day'=>$faker->dateTimeThisCentury(),
            'arrive_plan'=>$faker->dateTimeThisCentury(),
            'remaining_amount'=>$faker->randomDigitNotNull(),
            'order_flug'=>$faker->boolean
          ]);
      }
    }
}
