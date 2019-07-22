<?php

use Illuminate\Database\Seeder;

class ArticleAndAuthorTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('article')->insert([
           [
               'article_name' => 'hello',
               'author_id' => rand(1,3)
           ],
            [
                'article_name' => 'hi',
                'author_id' => rand(1,3)
            ],
            [
                'article_name' => 'good',
                'author_id' => rand(1,3)
            ]
        ]);

        DB::table('author')->insert([
            [
                'author_name' => 'dave'
            ],
            [
                'author_name' => 'jimmy'
            ],
            [
                'author_name' => 'mild'
            ]
        ]);
    }
}
