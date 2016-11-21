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

      for($i=1; $i<=100; $i++)
      {
          DB::table('GENRE')->insert([
            'genre_id'=>$i,
            'category'=>$faker->word(),
            'genre_1'=>$faker->word(),
            'genre_2'=>$faker->word()
          ]);
      }
    }
}
