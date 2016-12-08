<?php

use Illuminate\Database\Seeder;
use App\TRANCELATER;
class TRANCELATER_TABLE extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('TRANCELATER')->delete();

       //faker使う。普通に使う場合と同じ。
      $faker = Faker\Factory::create('ja_JP');

      for($i=1; $i<=100; $i++)
      {
          DB::table('TRANCELATER')->insert([
            'trancelater_name'=>$faker->name()
          ]);
      }
    }
}
