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

      for($i=1; $i<=100; $i++)
      {
          DB::table('UORDER_PAID')->insert([
            'uorder_id'=>$i
          ]);
      }
    }
}
