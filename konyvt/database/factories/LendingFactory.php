<?php

namespace Database\Factories;

use App\Models\Copies;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lending>
 */
class LendingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'user_id'=> User::all() -> random()->id,
        'copy_id'=> Copies::all() -> random()->copy_id,
        'start'=> rand(1980, 2020),
        'message'=> rand(0, 4)
        ];
    }
}
