<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'task' => 'Полёт прошёл хорошо за исключением посадки , посадка было жесткой.',
            'result' => 'Полёт прошёл хорошо за исключением посадки , посадка было жесткой . Из минусов хочу отметить плохую шумоизоляцию , из плюсов приятная подсветка салона и то что самолёт был очень свежий',
            'image' => 'images/reviews/review1.png',
            'image_full' => 'images/reviews/review1.png',
        ];
    }
}
