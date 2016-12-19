<?php

use Illuminate\Database\Seeder;
use App\REVIEW;
use Carbon\Carbon;

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
        $data = [];
        $exp = ["面白かった", "とても良かった", "良かった", "微妙"];
        $cnt = 0;
        for ($i = 1; $i <= 100; $i++) {
            for ($j = 1; $j <= 10; $j++) {
                $data[] = [
                    'product_id' => $i,
                    'user_id' => $j,
                    'review' => $faker->randomDigitNotNull(),
                    'review_text' => $exp[$j % 4],
                    'entry_time' => Carbon::create(2016, rand(1, 12), rand(1, 28), rand(0, 23), rand(0, 59), rand(0, 59))
                ];
                if ($cnt % 200 == 0) {
                    echo "REVIEW : $cnt OK\n";
                }
                $cnt++;
            }

        }
        DB::table('REVIEW')->insert($data);
    }
}
