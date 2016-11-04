<?php

use Illuminate\Database\Seeder;
use App\VENDOR;
class VENDOR_TABLE extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('USER')->delete();

       //faker使う。普通に使う場合と同じ。
      $faker = Faker\Factory::create('ja_JP');

      for($i=0; $i<100; $i++)
      {
          DB::table('USER')->insert([
            'vendor_name'=>$faker->company(),
            'vendor_address'=>$faker->address(),

          ]);
      }
    }
}
