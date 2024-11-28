<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'author' => fake()->name(),
            'title' => fake()->sentence(),
            'price' => fake()->randomFloat(2,1,1000),
            'isbn' => fake()->isbn13(),
            'stock' => fake()->numberBetween(1,100),

        ];
    }
}
