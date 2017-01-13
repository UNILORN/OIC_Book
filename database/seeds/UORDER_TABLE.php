<?php

use Illuminate\Database\Seeder;
use App\UORDER;
use Carbon\Carbon;

class UORDER_TABLE extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('UORDER')->delete();

        //faker使う。普通に使う場合と同じ。
        $faker = Faker\Factory::create('ja_JP');
        $data = [];
        for ($i = 1; $i <= 1500; $i++) {
            $data[] = [
                'uorder_id' => $i,
                'user_id' => $i % 100,
                'uorder_day' => Carbon::create(2016, rand(1, 12), rand(1, 28), rand(0, 23), rand(0, 59), rand(0, 59)),
                'uorder_price' => $faker->randomDigitNotNull() * 100,
                'uorder_use_point' => $faker->randomDigitNotNull() * 10,
                'uorder_add_point' => $faker->randomDigitNotNull(),
                'uorder_payment' => $faker->boolean(),
                'uorder_cancel' => $faker->boolean(),
                'uorder_auth_cancel' => $faker->boolean(),
                'method_of_payment_id' => $i
            ];
        }
        for ($i = 1501; $i <= 3000; $i++) {
            $data[] = [
                'uorder_id' => $i,
                'user_id' => $i % 100,
                'uorder_day' => Carbon::create(2017, 1, rand(1, 28), rand(0, 23), rand(0, 59), rand(0, 59)),
                'uorder_price' => $faker->randomDigitNotNull() * 100,
                'uorder_use_point' => $faker->randomDigitNotNull() * 10,
                'uorder_add_point' => $faker->randomDigitNotNull(),
                'uorder_payment' => $faker->boolean(),
                'uorder_cancel' => $faker->boolean(),
                'uorder_auth_cancel' => $faker->boolean(),
                'method_of_payment_id' => $i
            ];
        }
        DB::table('UORDER')->insert($data);
    }
}
