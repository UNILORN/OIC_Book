<?php

use Illuminate\Database\Seeder;
use App\AUTHER;
class AUTHER_TABLE extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('AUTHER')->delete();

    }
}
