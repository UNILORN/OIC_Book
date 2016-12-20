<?php

use Illuminate\Database\Seeder;
use App\TRANCELATER;

class TRANCELATER_TABLE extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('TRANCELATER')->delete();

        //faker使う。普通に使う場合と同じ。
        $faker = Faker\Factory::create('ja_JP');
        $data = [];
        for ($i = 1; $i <= 100; $i++) {
            $data[] =[
                'trancelater_name' => $faker->name()
            ];
        }
        DB::table('TRANCELATER')->insert($data);
    }
}
