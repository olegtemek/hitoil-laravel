<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Contact;
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

        // Page::factory()
    }
}
