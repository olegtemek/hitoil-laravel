<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Certificate;
use App\Models\Contact;
use App\Models\Factory;
use App\Models\Page;
use App\Models\Partner;
use App\Models\Petrol;
use App\Models\Product;
use App\Models\Review;
use App\Models\Type;
use App\Models\Viscosity;
use App\Models\Volume;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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

        $pages = [
            [
                'title' => 'Ваш надежный поставщик топлива и нефтепродуктов',
                'description' => '',
                'image' => 'images/pages/intro1.jpg',
                'slug' => 'main',
            ],
            [
                'title' => 'Условия доставки',
                'description' => '',
                'image' => 'images/pages/intro1.jpg',
                'slug' => 'delivery',
            ],
        ];

        DB::table('pages')->insert($pages);

        Category::factory(3)->create();

        Brand::factory(4)->create();
        Volume::factory(4)->create();
        Viscosity::factory(4)->create();
        Type::factory(4)->create();
        Product::factory(100)->create();
        Factory::factory(5)->create();
        Partner::factory(5)->create();

        Certificate::factory(5)->create();
        Review::factory(5)->create();

        Petrol::factory(120)->create();
    }
}
