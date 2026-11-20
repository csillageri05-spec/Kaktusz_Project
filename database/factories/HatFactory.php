<?php

namespace Database\Factories;

use App\Enums\HatType;
use App\Models\Hat;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Hat>
 */
class HatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type' => fake()->randomElement(HatType::cases()),
            'image_path' => fake()->imageUrl(),
        ];
    }
}
