<?php

namespace Database\Factories;

use App\Enums\CactusType;
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
            'type' => fake()->randomElement(CactusType::cases()),
            'dmg' => fake()->numberBetween(0, 100),
            'speed' => fake()->numberBetween(0, 100),
            'mana' => fake()->numberBetween(0, 100),
            'hp' => fake()->numberBetween(1, 100),
            'owner' => fake()->name(),
            'image_path' => fake()->imageUrl(),
            'hat_id' => null,
        ];
    }
}
