<?php

namespace Database\Factories;

use App\Models\Products;
use Illuminate\Database\Eloquent\Factories\Factory;


class ProductsFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->catchPhrase(),
            'price' => $this->faker->randomFloat(2, 100, 10000),
            'category_id' => $this->faker->numberBetween(1, 10),
            'stock' => $this->faker->numberBetween(1, 100),
            'status' => $this->faker->randomElement([1, 0]),
        ];
    }
}
