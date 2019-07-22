<?php

use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comment')->insert([
            [
                'comment' => 'sad',
                'article_id' => rand(1,3)
            ],
            [
                'comment' => 'happy',
                'article_id' => rand(1,3)
            ],
            [
                'comment' => 'cry',
                'article_id' => rand(1,3)
            ]
        ]);
    }
}
