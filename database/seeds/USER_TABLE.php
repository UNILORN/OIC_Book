<?php

use Illuminate\Database\Seeder;
use App\USER;
class USER_TABLE extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->delete();

       //faker使う。普通に使う場合と同じ。
      $faker = Faker\Factory::create('ja_JP');

      for($i=1; $i<=50; $i++)
      {
          DB::table('users')->insert([
              'name'=>$faker->name(),
              'email'=>$faker->email(),
              'password'=>$faker->password(),
              'user_post_code'=>$faker->postcode(),
              'user_address'=>$faker->address(),
              'user_phone_number'=>$faker->phoneNumber(),
              'user_point'=>$faker->randomDigitNotNull(),
              'employee_id'=>$i,
              'user_recede_flug'=>$faker->boolean()
          ]);
      }
      for($i=51; $i<100; $i++)
      {
          DB::table('users')->insert([
              'name'=>$faker->name(),
              'email'=>$faker->email(),
              'password'=>$faker->password(),
              'user_post_code'=>$faker->postcode(),
              'user_address'=>$faker->address(),
              'user_phone_number'=>$faker->phoneNumber(),
              'user_point'=>$faker->randomDigitNotNull(),
              'employee_id'=>NULL,
              'user_recede_flug'=>$faker->boolean()
          ]);
      }
    }
}
