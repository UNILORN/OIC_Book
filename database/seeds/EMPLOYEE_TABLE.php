<?php

use Illuminate\Database\Seeder;
use App\EMPLOYEE;
class EMPLOYEE_TABLE extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('EMPLOYEE')->delete();

       //faker使う。普通に使う場合と同じ。
      $faker = Faker\Factory::create('ja_JP');

      for($i=0; $i<100; $i++)
      {
          DB::table('EMPLOYEE')->insert([
            'employee_password'=>$faker->password(),
            'employee_auth_id'=>$i%3
          ]);
      }
    }
}
