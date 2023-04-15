<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Message;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name' => 'Partha Debnath',
            'email' => 'partha.aastha@gmail.com',
        ]);
        User::factory()->create([
            'name' => 'Md. Alam',
            'email' => 'alam.aastha@gmail.com',
        ]);
        User::factory()->create([
            'name' => 'Pravat Sarkar',
            'email' => 'pravat.aastha@gmail.com',
        ]);
        User::factory()->create([
            'name' => 'Subrata Sarkar',
            'email' => 'aastha.subrata@gmail.com',
        ]);

        Message::factory(50)->create();
    }
}
