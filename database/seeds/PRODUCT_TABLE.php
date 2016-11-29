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

      //ファイルポインタをオープン
      $file = fopen("public/img/Seed_book.txt","r");

      $i = 1;
      //ファイルを一行ずつ出力
      if($file){
        while($line = fgets($file)){
          $line = str_replace(PHP_EOL,'',$line);
          $book = explode(" ",$line);
              DB::table('PRODUCT')->insert([
                'product_id'=>$i,
                'genre_id'=>$book[4],
                'auther_name'=>$book[5],
                'product_name'=>$book[1],
                'product_image'=>$book[0],
                'product_price'=>$book[3],
                'product_stock'=>$faker->randomDigitNotNull(),
                'ISBN'=>$faker->randomDigitNotNull(),
                'trancelater_ID'=>$i,
                'product_height'=>$faker->randomDigitNotNull(),
                'product_width'=>$faker->randomDigitNotNull(),
                'product_depth'=>$faker->randomDigitNotNull(),
                'product_page'=>$faker->randomDigitNotNull(),
                'product_start_day'=>$faker->date(),
                'product_explanation'=>$book[2],
                'product_browse_number'=>$faker->randomDigitNotNull(),
                'product_order_number'=>$faker->randomDigitNotNull(),
                'delete_flg' => 0,
              ]);
              $i = $i + 1;
              echo $i;
            }
          }
      }
    }
