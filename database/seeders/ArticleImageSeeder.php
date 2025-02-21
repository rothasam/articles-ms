<?php

namespace Database\Seeders;

use App\Models\ArticleImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleImageSeeder extends Seeder
{
   
    public function run(): void
    {
        ArticleImage::factory(40)->create();
    }
}
