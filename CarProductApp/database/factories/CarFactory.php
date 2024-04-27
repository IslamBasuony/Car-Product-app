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
            'name' => $this->faker->name(),
            'price' => $this->faker->randomDigitNotNull(),
            'manufacturing_year' => $this->faker->year(),
            'color' => $this->faker->hexColor(),
            'category' => $this->faker->word(),
            'condition' => $this->faker->randomElement(['new', 'used']),
            'body' => $this->faker->word(),
            'image' => $this->faker->imageUrl(640, 480, 'cars', true),
        ];
    }
}
