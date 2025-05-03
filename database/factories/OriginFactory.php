<?php

namespace Database\Factories;

use App\Models\Origin;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Origin>
 */
class OriginFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        return [
            'index' => $this->faker->word(),
            'name' => $this->faker->word(),
            'description' => $this->faker->text(),
            'health' => 20,
            'food' => 'Всеядные',
            'average' => 'Как у людей',
            'adulting' => 'Как у людей',
            'parent' => null
        ];
    }
}
