<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Page;
use App\Models\Product;
use App\Models\Type;
use App\Models\Viscosity;
use App\Models\Volume;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'email' => 'a@a.a',
            'password' => Hash::make('a')
        ]);
        Contact::factory()->create([
            'number' => 'number',
            'number_whatsapp' => 'number_whatsapp',
            'address' => 'address',
            'time' => 'time',
            'email' => 'email',
        ]);

        Page::factory(6)->create();
        Category::factory(3)->create();

        Brand::factory(4)->create();
        Volume::factory(4)->create();
        Viscosity::factory(4)->create();
        Type::factory(4)->create();
        Product::factory(100)->create();
    }
}
