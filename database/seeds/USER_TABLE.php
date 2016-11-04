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
      DB::table('USER')->delete();

       //faker使う。普通に使う場合と同じ。
      $faker = Faker\Factory::create('ja_JP');

      for($i=0; $i<100; $i++)
      {
          DB::table('USER')->insert([
              'user_name'=>$faker->userName(),
              'user_email'=>$faker->email(),
              'user_password'=>$faker->password(),
              'user_post_code'=>$faker->postcode(),
              'user_address'=>$faker->address(),
              'user_phone_number'=>$faker->phoneNumber(),
              'user_point'=>$faker->randomDigitNotNull(),
              'user_last_login'=>$faker->time(),
              'employee_id'=>$faker->randomDigitNotNull(),
              'user_recede_flug'=>$faker->boolean()

          ]);
      }
    }
}
