<?php

use Illuminate\Database\Seeder;
use App\METHOD_OF_PAYMENT;

class METHOD_OF_PAYMENT_TABLE extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('METHOD_OF_PAYMENT')->delete();

        //faker使う。普通に使う場合と同じ。
        $faker = Faker\Factory::create('ja_JP');
        $data = [];
        for ($i = 0; $i < 100; $i++) {
            $data[] = [
                'method_of_payment' => $faker->creditCardType()
            ];
        }
        DB::table('METHOD_OF_PAYMENT')->insert($data);
    }
}
