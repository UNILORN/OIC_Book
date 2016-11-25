<?php

use Illuminate\Database\Seeder;
use App\CART;
class CART_TABLE extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('CART')->delete();

       //faker使う。普通に使う場合と同じ。
      $faker = Faker\Factory::create('ja_JP');

      for($i=0; $i<100; $i++)
      {
          DB::table('CART')->insert([
            'user_id'=>$i,
            'product_id'=>$i,
            'product_cart_number'=>$faker->randomDigitNotNull()
          ]);
      }
    }
}
