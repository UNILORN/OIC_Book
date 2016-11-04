<?php

use Illuminate\Database\Seeder;
use App\PROUSER;
class PROUSER_TABLE extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('PROUSER')->delete();

       //faker使う。普通に使う場合と同じ。
      $faker = Faker\Factory::create('ja_JP');

      for($i=0; $i<100; $i++)
      {
          DB::table('PROUSER')->insert([
          'e-mail'=>$faker->email(),
          'time_limit'=>$faker->dateTime(),
          'pro_token'=>$faker->md5()
          ]);
      }
    }
}
