<?php

use Illuminate\Database\Seeder;
use App\AUTHER;
class AUTHER_TABLE extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('AUTHER')->delete();

      $file = fopen("public/img/Seed_book.txt","r");

       //faker使う。普通に使う場合と同じ。
      $faker = Faker\Factory::create('ja_JP');

      for($i=0; $i<100; $i++)
      {
          DB::table('AUTHER')->insert([
            'auther_name'=>$faker->name()
          ]);
      }
    }
}
