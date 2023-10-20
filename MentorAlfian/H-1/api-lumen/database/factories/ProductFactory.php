<?php
// database/factories/ProductFactory.php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
            'title' => $this->faker->word,
            'price' => $this->faker->numberBetween(100, 10000),
            'photo' => $this->faker->imageUrl(400, 300),
            'description' => $this->faker->paragraph,
        ];
    }
}
