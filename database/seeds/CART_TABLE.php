<?php

use Illuminate\Database\Seeder;
use App\CART;

class CART_TABLE extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('CART')->delete();

        //faker使う。普通に使う場合と同じ。
        $faker = Faker\Factory::create('ja_JP');
        $data = [];
        for ($i = 1; $i <= 100; $i++) {
            $data[] = [
                'user_id' => $i,
                'product_id' => $i,
                'product_cart_number' => $faker->randomDigitNotNull()
            ];
        }
        DB::table('CART')->insert($data);
    }
}
