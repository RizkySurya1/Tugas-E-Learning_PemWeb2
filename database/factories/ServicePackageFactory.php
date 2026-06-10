<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ServicePackage>
 */
class ServicePackageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => 'Paket ' . fake()->word(),
            'description' => fake()->paragraph(),
            'price' => fake()->numberBetween(300000, 1500000),
            'duration_hours' => fake()->numberBetween(1, 8),
            'includes' => fake()->sentence(),
        ];
    }
}
