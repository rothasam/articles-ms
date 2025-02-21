<?php

namespace Database\Seeders;

use App\Models\ArticleTag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleTagSeeder extends Seeder
{

    public function run(): void
    {
        ArticleTag::factory(40)->create();
    }
}
