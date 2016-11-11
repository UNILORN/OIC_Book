<?php

use Illuminate\Database\Seeder;
use App\PRODUCT;
class PRODUCT_TABLE extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('PRODUCT')->delete();

       //faker使う。普通に使う場合と同じ。
      $faker = Faker\Factory::create('ja_JP');

      for($i=0; $i<100; $i++)
      {
          DB::table('PRODUCT')->insert([
            'genre_id'=>$i,
            'product_name'=>$faker->word(),
            'product_image'=>$faker->word(),
            'product_price'=>$faker->randomDigitNotNull()*1000,
            'product_stock'=>$faker->randomDigitNotNull(),
            'ISBN'=>$faker->randomDigitNotNull(),
            'trancelater_ID'=>$i,
            'product_height'=>$faker->randomDigitNotNull(),
            'product_width'=>$faker->randomDigitNotNull(),
            'product_depth'=>$faker->randomDigitNotNull(),
            'product_page'=>$faker->randomDigitNotNull(),
            'product_start_day'=>$faker->date(),
            'product_explanation'=>$faker->word(),
            'product_browse＿number'=>$faker->randomDigitNotNull(),
            'product_order_number'=>$faker->randomDigitNotNull()
          ]);
      }
    }
}