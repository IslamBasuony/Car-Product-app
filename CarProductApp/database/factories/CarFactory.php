<?php

namespace Database\Factories;

use App\Models\CarModel;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'price' => fake()->randomDigitNotNull(),
            'manufacturing_year' => fake()->year(),
            'color' => fake()->hexColor(),
            'category' => fake()->word(),
            'condition' => fake()->randomElement(['new', 'used']),
            'body' => fake()->word(),
            'image' => fake()->imageUrl(640, 480, 'cars', true),
        ];
    }
}
