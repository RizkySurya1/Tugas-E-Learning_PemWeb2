<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StudioRoom>
 */
class StudioRoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => 'Studio ' . fake()->randomElement(['A', 'B', 'C', 'D', 'E']),
            'capacity' => fake()->numberBetween(2, 10),
            'equipment' => fake()->sentence(),
            'rate_per_hour' => fake()->numberBetween(200000, 400000),
            'description' => fake()->paragraph(),
        ];
    }
}
