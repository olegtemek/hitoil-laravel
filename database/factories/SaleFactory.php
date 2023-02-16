<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sale>
 */
class SaleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => 'Специальные цены<br>на редукторные смазки',
            'description' => 'Мы осуществляем доставку топлива на грузовых автомобилях <span>ГАЗ</span>, ЗИЛ, МАЗ,  VOLVO, DAF, SCANIA с общим объемом от 5000 в рамках одной обалсти и от 65000 литров при доставке по стране (из одной области в другую). ',
            'image' => 'images/sales/fullsale1.jpg'
        ];
    }
}
