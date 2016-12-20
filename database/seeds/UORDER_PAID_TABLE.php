<?php

use Illuminate\Database\Seeder;
use App\UORDER_PAID;

class UORDER_PAID_TABLE extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('UORDER_PAID')->delete();

        //faker使う。普通に使う場合と同じ。
        $faker = Faker\Factory::create('ja_JP');
        $data = [];
        for ($i = 1; $i <= 100; $i++) {
            $data[] = [
                'uorder_id' => $i
            ];
        }
        DB::table('UORDER_PAID')->insert($data);
    }
}
