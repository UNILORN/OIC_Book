<?php

use Illuminate\Database\Seeder;
use App\RETURN_BOOK;

class RETURN_BOOK_TABLE extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('RETURN_BOOK')->delete();

        //faker使う。普通に使う場合と同じ。
        $faker = Faker\Factory::create('ja_JP');
        $data = [];
        for ($i = 1; $i <= 100; $i++) {
            $data[] = [
                'vender_id' => $i,
                'product_id' => $i,
                'return_number' => $faker->randomDigitNotNull(),
                'return_time' => $faker->dateTimeThisCentury()
            ];
        }
        DB::table('RETURN_BOOK')->insert($data);
    }
}
