<?php

namespace Database\Factories;

use App\Models\Cactus;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Cactus>
 */
class CactusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'type' => fake()->word(),
            'dmg' => fake()->randomFloat(2, 0, 100),
            'speed' => fake()->randomFloat(2, 0, 100),
            'mana' => fake()->randomFloat(2, 0, 100),
            'hp' => fake()->randomFloat(2, 0, 100),
            'owner' => fake()->word(),
            'image_path' => fake()->imageUrl(),
            'hat_id' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
