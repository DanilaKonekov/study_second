<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class ProductCardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company,
            'article_number' => $this->faker->unique()->randomNumber(6),
            'retail_price' => $this->faker->randomFloat(2, 0.99, 99.99)
        ];
    }
}
