<?php

use Illuminate\Database\Seeder;

class PaperTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
          [
              'paper_name' => '黄冈',
              'start_time' => strtotime('+7 days'),
              'duration' => '120',
          ],
            [
                'paper_name' => '衡水',
                'start_time' => strtotime('+7 days'),
                'duration' => '120',
            ]
        ];
        DB::table('paper')->insert($data);
    }
}
