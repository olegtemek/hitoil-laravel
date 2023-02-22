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
use App\Models\Sale;
use App\Models\Setting;
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
            [
                'title' => 'Акции и Специальные предложения',
                'description' => '',
                'image' => 'images/pages/intro1.jpg',
                'slug' => 'sale',
            ],
            [
                'title' => 'Где мы находимся',
                'description' => '',
                'image' => 'images/pages/intro1.jpg',
                'slug' => 'contacts',
            ],
            [
                'title' => 'Расчет доставки',
                'description' => '',
                'image' => 'images/pages/intro1.jpg',
                'slug' => 'cost',
            ],
            [
                'title' => 'Масла и смазки оптом',
                'description' => 'Широкий выбор масел различных марок и от различных брендов',
                'image' => 'images/pages/intro2.jpg',
                'slug' => 'oil',
            ],
        ];

        DB::table('pages')->insert($pages);


        $categories = [
            [
                'title' => 'Трансмиссионные масла',
                'image' => 'images/category/category1.png',
                'slug' => 'transmis-oil'
            ],
            [
                'title' => 'Моторные масла',
                'image' => 'images/category/category2.png',
                'slug' => 'motor-oil'
            ],
            [
                'title' => 'Гидравлические масла',
                'image' => 'images/category/category3.png',
                'slug' => 'gidr-oil'
            ],
            [
                'title' => 'Трансформаторные масла',
                'image' => 'images/category/category4.png',
                'slug' => 'tansfor-oil'
            ],
            [
                'title' => 'Компрессорные масла',
                'image' => 'images/category/category5.png',
                'slug' => 'compr-oil'
            ],
        ];

        DB::table('categories')->insert($categories);

        Brand::factory(4)->create();
        Volume::factory(4)->create();
        Viscosity::factory(4)->create();
        Type::factory(4)->create();
        Product::factory(100)->create();
        Factory::factory(5)->create();
        Partner::factory(5)->create();
        Sale::factory(3)->create();
        Certificate::factory(5)->create();
        Review::factory(5)->create();

        Petrol::factory(120)->create();

        Setting::factory(1)->create();
    }
}
