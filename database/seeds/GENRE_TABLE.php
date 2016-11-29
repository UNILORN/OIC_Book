<?php

use Illuminate\Database\Seeder;
use App\GENRE;
class GENRE_TABLE extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('GENRE')->delete();

       //faker使う。普通に使う場合と同じ。
      $faker = Faker\Factory::create('ja_JP');


          DB::table('GENRE')->insert([
            'genre_id'=>1,
            'category'=>'小説',
            'genre_1'=>$faker->word(),
            'genre_2'=>$faker->word()
          ]);

          DB::table('GENRE')->insert([
            'genre_id'=>2,
            'category'=>'漫画',
            'genre_1'=>$faker->word(),
            'genre_2'=>$faker->word()
          ]);

          DB::table('GENRE')->insert([
            'genre_id'=>3,
            'category'=>'専門書',
            'genre_1'=>$faker->word(),
            'genre_2'=>$faker->word()
          ]);

          DB::table('GENRE')->insert([
            'genre_id'=>4,
            'category'=>'絵本',
            'genre_1'=>$faker->word(),
            'genre_2'=>$faker->word()
          ]);

    }
}
