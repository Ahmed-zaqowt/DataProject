<?php

namespace Database\Factories;

use App\Models\OrderItem;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderItem>
 */
class OrderItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = OrderItem::class;
    protected $model1 = OrderItemFactory::class;
    public function definition(): array
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 20),
            'product_id' => $this->faker->numberBetween(1, 40),
        ];
    }
}
