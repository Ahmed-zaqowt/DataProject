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
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'desc' => $this->faker->word(15, true),
            'price' => $this->faker->numberBetween(1, 10000),
            'qun' => $this->faker->numberBetween(1, 1000),
        ];
    }
}
