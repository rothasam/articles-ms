<?php

namespace Database\Factories;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;



class ArticleFactory extends Factory
{

    public function definition(): array
    {

        $ids = User::get(['id'])->pluck('id')->toArray();

        return [
            // 'title' => $this->faker->sentence(5), // can use this or the below one
            'title' => fake()->sentence(), // default is 6 words
            'thumbnail' => 'no_photo.jpg',
            'short_desc' => fake()->sentence(10),
            'desc' => fake()->paragraph(5),  // default is 3 sentences
            'category_id' => fake()->randomElement([1,2,3]), 
            // 'category_id' => fake()->numberBetween(1, 3),
            'poster_id' => fake()->randomElement($ids)
        ];
    }
}

// fake()->sentences(2,true) : 2 sentences and return as text/string if not  define true => return as array
// fake()->paragraph(5,true) : 5 paragraph and return as text/string if not define true
// fake()->randomElement([1,2,3])  or use fake()->numberBetween(1, 3)
