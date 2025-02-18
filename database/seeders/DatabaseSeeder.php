<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Tag;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // command line to create model : php artisan make:model ModelName (ModelName start with big letter and singular noun)
       
    /*
        $category = new Category();
        $category->title = 'Mountain';
        $category->save();

        $category = new Category();
        $category->title = 'Sea';
        $category->save();

        $category = new Category();
        $category->title = 'Culture';
        $category->save();

        // na t'ne kuy write te, so use the code below
    */

        // $dataCategories = [
        //     ['title' => 'Mountain'],
        //     ['title' => 'Sea'],
        //     ['title' => 'Culture'],
        // ];

        // foreach ($dataCategories as $data) {
        //     $category = new Category();
        //     $category->title = $data['title'];
        //     $category->save();
        // }


        // $dataTags = [
        //     ['name' => 'temple'],
        //     ['name' => 'angkor'],
        //     ['name' => 'kompot'],
        // ];

        // foreach($dataTags as $data){
        //     $tag = new Tag();
        //     $tag->name = $data['name'];
        //     $tag->save();  
        // }

        // note : if we have default(like the code above),there should be per seed(Class) per table. Below is how we call Class.
        // command line to create seed :  php artisan make:seeder ClassSeeder , example :  php artisan make:seeder CategorySeeder



        $this->call([
            CategorySeeder::class,
            TagSeeder::class,
        ]);



    }
}
