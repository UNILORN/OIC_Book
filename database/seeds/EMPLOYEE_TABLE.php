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

        DB::table('EMPLOYEE')->insert([
            'employee_id'=>1,
            'employee_email'=>'oic.book.sm2@gmail.com',
            'employee_password'=>sha1('masakage77'),
            'employee_auth_id'=>1
          ]);

      /*for($i=1; $i<=50; $i++)
      {
          DB::table('EMPLOYEE')->insert([
            'employee_id'=>$i,
              'employee_email'=>
            'employee_password'=>$faker->password(),
            'employee_auth_id'=>$i%3
          ]);
      }*/
    }
}
