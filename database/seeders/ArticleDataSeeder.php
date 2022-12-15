<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ArticleDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Article::factory(100)->create();
    }
}
