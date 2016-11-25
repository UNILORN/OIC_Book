<?php

use Illuminate\Database\Seeder;
use App\PRODUCT_EDIT;
class PRODUCT_EDIT_TABLE extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('PRODUCT_EDIT')->delete();

       //faker使う。普通に使う場合と同じ。
      $faker = Faker\Factory::create('ja_JP');

      for($i=0; $i<100; $i++)
      {
          DB::table('PRODUCT_EDIT')->insert([
            'product_id'=>$i,
            'product_edit_time'=>$faker->dateTimeThisCentury(),
            'employee_id'=>$i
          ]);
      }
    }
}
