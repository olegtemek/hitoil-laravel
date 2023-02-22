<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $title = fake()->text(10);
        $images = ['images/products/product1.jpg', 'images/products/product1.jpg', 'images/products/product1.jpg', 'images/products/product1.jpg', 'images/products/product1.jpg'];

        return [
            'title' => $title,
            'brand_id' => fake()->numberBetween(1, 4),
            'viscosity_id' => fake()->numberBetween(1, 4),
            'category_id' => fake()->numberBetween(1, 3),
            'volume_id' => fake()->numberBetween(1, 4),
            'type_id' => fake()->numberBetween(1, 4),
            'price' => fake()->numberBetween(200, 1000),
            'model' => $title,
            'base' => $title,
            'slug' => Str::slug($title),
            'images' => json_encode($images),
            'popular' => fake()->numberBetween(0, 1),
            'description' => fake()->text(200)
        ];
    }
}
