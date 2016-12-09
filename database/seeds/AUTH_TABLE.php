<?php

use Illuminate\Database\Seeder;
use App\AUTH;
class AUTH_TABLE extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('AUTH')->delete();

    }
}
