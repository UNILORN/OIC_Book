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
            'employee_id' => 1,
            'employee_name'=>"Admin",
            'employee_email' => 'oic.book.sm2@gmail.com',
            'employee_password' => sha1('masakage77'),
            'employee_phone_number' => $faker->phoneNumber()
        ]);
        $data = [];
        for ($i = 2; $i <= 100; $i++) {
            $data[] = [
                'employee_id' => $i,
                'employee_name'=>"Employee".$i,
                'employee_email' => $i.'@aaa.aaa',
                'employee_password' => sha1($i.rand(1,1000)),
                'employee_phone_number' => $faker->phoneNumber()
            ];
        }
        DB::table('EMPLOYEE')->insert($data);
    }
}
