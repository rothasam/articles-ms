<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    public function definition(): array
    {

        // or use :  'storage/avatars/1.png'
        $avatars = [
            '1.jpg',
            '2.jpg',
            '3.jpg',
            '4.jpg',
            '5.jpg',
            '6.jpg',
            '7.jpg',
            '8.jpg',
            '9.jpg',
            '10.jpg',
            '11.jpg',
            '12.jpg',
            'no_photo.jpg',
        ];

        return [
            'first_name' => fake()->firstName,
            'last_name' => fake()->lastName,
            'avatar' => fake()->randomElement($avatars),
            'email' => fake()->unique()->safeEmail(),
            // 'email_verified_at' => Carbon::now()->startOfWeek(),
            // 'email_verified_at' => Carbon::now()->subDays(7),
            'email_verified_at' => Carbon::now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
        ];
    }


    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
