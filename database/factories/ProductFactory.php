<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'active' => fake()->boolean(80),
            'price' => fake()->numberBetween(100, 1000),
            'category_id' => fake()->numberBetween(1, 10),
            'description' => fake()->text(671),
            'image' => fake()->word(),
            'size' => fake()->numberBetween(10, 100),
            'color_id' => fake()->numberBetween(1, 10),
            'material' => fake()->company(),
            'weight' => fake()->numberBetween(50, 200),
        ];
    }
}
