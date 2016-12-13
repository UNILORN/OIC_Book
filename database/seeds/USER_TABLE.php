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
        for ($i = 1; $i <= 100; $i++) {
            DB::table('users')->insert([
                //'id' => $i,
                'name' => $faker->name(),
                'email' => $i . $faker->email(),
                'password' => $faker->password(),
                'user_post_code' => $faker->postcode(),
                'user_address' => $faker->address(),
                'user_phone_number' => $faker->phoneNumber(),
                'user_point' => $faker->randomDigitNotNull(),
                'employee_id' => NULL,
                'user_recede_flug' => $faker->boolean()
            ]);

            DB::table('users')->insert([
                'name'=>'Admin',
                'email'=>'admin@admin.admin',
                'password'=>'$2y$10$.Uqg7T2gx0vMg2Vb6X1LKesiRkKX3wH8upReAj/2fgeErlyQokESu',
                'user_post_code' => '3954936',
                'user_address' => 'おーさかふだよ',
                'user_phone_number' => '06456565645',
                'user_point' => '0',
                'employee_id' => NULL,
                'user_recede_flug' => $faker->boolean()
            ]);
        }
    }
}
