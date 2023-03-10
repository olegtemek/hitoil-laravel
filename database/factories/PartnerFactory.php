<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Partner>
 */
class PartnerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => 'Bionord',
            'description' => 'Эффективное средство борьбы с гололедом',
            'link' => 'https://google.kz/',
            'image' => 'images/partners/bionord.png'
        ];
    }
}
