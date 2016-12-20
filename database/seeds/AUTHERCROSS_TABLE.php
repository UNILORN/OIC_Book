<?php

use Illuminate\Database\Seeder;
use App\AUTHERCROSS;

class AUTHERCROSS_TABLE extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('AUTHERCROSS')->delete();

        //faker使う。普通に使う場合と同じ。
        $faker = Faker\Factory::create('ja_JP');
        $data = [];
        for ($i = 1; $i <= 100; $i++) {
            $data[] = [
                'auther_id' => $i,
                'product_id' => $i,
                'auther_cross' => $faker->word()
            ];
        }
        DB::table('AUTHERCROSS')->insert($data);
    }
}
