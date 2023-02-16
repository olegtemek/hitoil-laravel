<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Setting>
 */
class SettingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'number' => '+7 777 544 37 75', 'number_whatsapp' => '+7 777 544 37 75', 'instagram' => 'https://www.instagram.com/o1eg0609/', 'facebook' => 'https://www.instagram.com/o1eg0609/', 'email' => 'hit@info.kz'
        ];
    }
}
