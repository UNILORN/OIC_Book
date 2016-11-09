<?php

use Illuminate\Database\Seeder;
use App\ARRIVE;
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

      for($i=0; $i<100; $i++)
      {
          DB::table('ARRIVE')->insert([
            'order_id'=>$i,
            'employee_id'=>$i,
            'arrive_number'=>$faker->randomDigitNotNull(),
            'arrive_day'=>$faker->dateTimeThisCentury(),
            'inspection_id'=>$faker->randomDigitNotNull()*100
          ]);
      }
    }
}
