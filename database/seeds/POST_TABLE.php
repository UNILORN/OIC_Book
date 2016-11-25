<?php

use Illuminate\Database\Seeder;
use App\POST;
class POST_TABLE extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('POST')->delete();

       //faker使う。普通に使う場合と同じ。
      $faker = Faker\Factory::create('ja_JP');

      for($i=0; $i<100; $i++)
      {
          DB::table('POST')->insert([
            'product_id'=>$i,
            'show_start_time'=>$faker->dateTimeThisCentury(),
            'show_end_time'=>$faker->dateTimeThisCentury()
          ]);
      }
    }
}
