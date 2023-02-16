<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Factory>
 */
class FactoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->text(20),
            'map' => '<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A93bad589004839f982d2a9e085b22d14915a8a43f4030d529c28594483f153ee&amp;source=constructor" width="500" height="400" frameborder="0"></iframe>'
        ];
    }
}
