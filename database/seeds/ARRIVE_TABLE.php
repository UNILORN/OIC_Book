<?php

use Illuminate\Database\Seeder;
use App\ARRIVE;
use Carbon\Carbon;
class ARRIVE_TABLE extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('ARRIVE')->delete();

       //faker使う。普通に使う場合と同じ。
      $faker = Faker\Factory::create('ja_JP');

      for($i=1; $i<=100; $i++)
      {
          DB::table('ARRIVE')->insert([
            'order_id'=>$i,
            'employee_id'=>$i,
            'arrive_number'=>$faker->randomDigitNotNull(),
            'arrive_day'=>Carbon::create(2016,rand(1,12),rand(1,28),rand(0,23),rand(0,59),rand(0,59)),
            'arrive_price'=>$faker->randomDigitNotNull()*100
          ]);
      }
    }
}
