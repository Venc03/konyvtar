<?php

namespace Database\Factories;

use App\Models\Books;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Copies>
 */
class CopiesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'book_id'=> Books::all() -> random()->book_id,
            'hardcover'=> rand(0, 2),
            'publicantion'=> rand(1980, 2020),
            'status'=> rand(0, 2)
        ];
    }
}
