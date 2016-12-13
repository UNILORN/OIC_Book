<?php

use Illuminate\Database\Seeder;
use App\ORDER;
use Carbon\Carbon;
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
            'employee_id'=>rand(1,100),
            'product_id'=>$i,
            'order_number'=>9,
            'order_day'=>Carbon::create(2016,rand(1,12),rand(1,28),rand(0,23),rand(0,59),rand(0,59)),
            'arrive_plan'=>$faker->dateTimeThisCentury(),
            'remaining_amount'=>$faker->randomDigit(),
            'order_flug'=>$faker->boolean
          ]);
      }
    }
}
