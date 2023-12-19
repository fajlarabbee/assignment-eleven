<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_name' =>  fake()->sentence(),
            'description' => fake()->paragraph(),
            'stock' => fake()->numberBetween(0, 200),
            'thumbnail' => fake()->imageUrl(),
            'price' => fake()->randomFloat(2, 10, 1000),
            'created_at' => fake()->dateTimeBetween('-2 months'),
        ];
    }
}
