<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 1,
            'studio_room_id' => fake()->numberBetween(1, 5),
            'booking_date' => fake()->dateTimeBetween('+1 day', '+30 days'),
            'start_time' => fake()->time(),
            'end_time' => fake()->time(),
            'status' => fake()->randomElement(['pending', 'confirmed', 'cancelled']),
            'total_price' => fake()->numberBetween(200000, 1500000),
        ];
    }
}
