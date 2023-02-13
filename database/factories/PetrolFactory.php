<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Petrol>
 */
class PetrolFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->text(10),
            'price' => '2 000',
            'volume' => '20',
            'type' => fake()->boolean(),
            'factory_id' => fake()->numberBetween(1, 5),
            'image' => 'images/partners/bionord.png'
        ];
    }
}
