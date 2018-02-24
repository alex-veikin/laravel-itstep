<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'slug' => 'first',
                'title' => 'Первая статья',
                'content' => '<h1>Первая статья</h1><p>Это первая статья</p>'
            ],
            [
                'slug' => 'second',
                'title' => 'Вторая статья',
                'content' => '<h1>Вторая статья</h1><p>Это вторая статья</p>'
            ],
        ]);
    }
}
