<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([
            [
                'slug' => 'home',
                'title' => 'Главная',
                'content' => '<h1>О нас</h1><p>Это главная страница</p>'
            ],
            [
                'slug' => 'about',
                'title' => 'О нас',
                'content' => '<h1>О нас</h1><p>Это страница о нас</p>'
            ],
        ]);
    }
}
