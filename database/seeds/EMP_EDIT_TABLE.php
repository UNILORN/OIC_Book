<?php

use Illuminate\Database\Seeder;
use App\EMP_EDIT;
class EMP_EDIT_TABLE extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('EMP_EDIT')->delete();

       //faker使う。普通に使う場合と同じ。
      $faker = Faker\Factory::create('ja_JP');

      for($i=0; $i<100; $i++)
      {
          DB::table('EMP_EDIT')->insert([
            'emp_edit_time'=>$faker->dateTimeThisCentury(),
            'emp_edit_password'=>$faker->password(),
            'emp_edit_auth_id'=>$i,
            'employee_id_from'=>$i,
            'employee_id_to'=>$i
          ]);
      }
    }
}
