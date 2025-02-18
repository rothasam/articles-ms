<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataCategories = [
            ['title' => 'Mountain'],
            ['title' => 'Sea'],
            ['title' => 'Culture'],
        ];

        foreach ($dataCategories as $data) {
            $category = new Category();
            $category->title = $data['title'];
            $category->save();
        }
    }
}
