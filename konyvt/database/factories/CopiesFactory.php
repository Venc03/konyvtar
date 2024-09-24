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
            'user_id'=> User::all() -> random()->id
        ];
    }
}
