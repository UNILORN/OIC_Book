<?php

use Illuminate\Database\Seeder;
use App\AUTH;
class AUTH_TABLE extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('AUTH')->delete();

       //faker使う。普通に使う場合と同じ。
      $faker = Faker\Factory::create('ja_JP');
      DB::table('AUTH')->insert([
        'auth_content'=>$faker->boolean(),
        'auth_id'=>0
      ]);
      DB::table('AUTH')->insert([
        'auth_content'=>$faker->boolean(),
        'auth_id'=>1
      ]);
      DB::table('AUTH')->insert([
        'auth_content'=>$faker->boolean(),
        'auth_id'=>2
      ]);
    }
}
