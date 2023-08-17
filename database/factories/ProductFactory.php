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
        $category = $this->faker->randomElement(['Electronics', 'Fashion', 'Dress', 'Groceries', 'Jewellery']);

        return [
            'name' => $this->faker->name(),
            'category' => $category,
            'description' => $this->faker->paragraph(),
            'price' => $this->faker->numberBetween(100, 10000)
        ];
    }
}
