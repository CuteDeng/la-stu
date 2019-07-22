<?php

use Illuminate\Database\Seeder;

class KeywordAndRelationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('keyword')->insert([
            [
                'keyword' => '书本'
            ],
            [
                'keyword' => '游戏'
            ],
            [
                'keyword' => '音乐'
            ]
        ]);

        DB::table('relation')->insert([
            [
                'article_id' => rand(1,3),
                'keyword_id' => rand(1,3)
            ],
            [
                'article_id' => rand(1,3),
                'keyword_id' => rand(1,3)
            ],
            [
                'article_id' => rand(1,3),
                'keyword_id' => rand(1,3)
            ]
        ]);
    }
}
