<?php

use Illuminate\Database\Seeder;
use App\REVIEW;

class REVIEW_TABLE extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('REVIEW')->delete();

        //faker使う。普通に使う場合と同じ。
        $faker = Faker\Factory::create('ja_JP');

        for ($i = 0; $i < 100; $i++) {
            for ($j = 0; $j < 10; $j++) {
                DB::table('REVIEW')->insert([
                    'product_id' => $i,
                    'user_id' => $j,
                    'review' => $faker->randomDigitNotNull(),
                    'review_text' => $faker->word(),
                    'entry_time' => $faker->dateTimeThisCentury()
                ]);
            }

        }
    }
}
