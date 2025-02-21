<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ArticleImage>
 */
class ArticleImageFactory extends Factory
{

    public function definition(): array
    {
        return [
            'article_id' => fake()->numberBetween(1,20),
            'name' => fake()->numberBetween(1,14) . '.jpg',
        ];
    }
}


// to convert number to string use strval