<?php

namespace Database\Seeders;

use App\Models\Books;
use App\Models\Copies;
use App\Models\Lending;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->count(100)->create();
        Books::factory()->count(100)->create();
        Copies::factory()->count(100)->create();
        Lending::factory()->count(100)->create();
    }
}
