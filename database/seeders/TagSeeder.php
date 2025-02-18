<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataTags = [
            ['name' => 'temple'],
            ['name' => 'angkor'],
            ['name' => 'kompot'],
        ];

        foreach($dataTags as $data){
            $tag = new Tag();
            $tag->name = $data['name'];
            $tag->save();  
        }
    }
}
