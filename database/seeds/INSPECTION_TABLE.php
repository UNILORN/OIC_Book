<?php

use Illuminate\Database\Seeder;
use App\INSPECTION;
class INSPECTION_TABLE extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('INSPECTION')->delete();

       //faker使う。普通に使う場合と同じ。
      $faker = Faker\Factory::create('ja_JP');

      for($i=0; $i<100; $i++)
      {
          DB::table('INSPECTION')->insert([
            'inspection_flug'=>$faker->boolean(),
            'employee_id'=>$i,
            'inspection_day'=>$faker->dateTimeThisCentury()
          ]);
      }
    }
}
