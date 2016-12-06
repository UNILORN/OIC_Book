<?php

use Illuminate\Database\Seeder;
use App\UORDERDETAILS;
class UORDERDETAILS_TABLE extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('UORDERDETAILS')->delete();

       //faker使う。普通に使う場合と同じ。
      $faker = Faker\Factory::create('ja_JP');

      for($i=1; $i<=2000; $i++)
      {
          DB::table('UORDERDETAILS')->insert([
            'uorder_id'=>$i%1500 + 1,
            'product_id'=>rand(1,100),
            'uorder_number'=>$faker->randomDigitNotNull(),
            'uorder_details_flug'=>$faker->boolean()
          ]);
      }
    }
}
