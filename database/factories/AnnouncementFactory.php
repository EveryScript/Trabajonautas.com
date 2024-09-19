<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Announcement>
 */
class AnnouncementFactory extends Factory
{
    public function definition(): array
    {
        return [
            'announce_title' => fake()->sentence(rand(5, 10)),
            'description' => fake()->paragraph(rand(70, 100)),
            'expiration_time' => fake()->dateTime(),
            'salary' => fake()->numberBetween(0, 50000),
            'announce_file' => fake()->text(100),
            'location_id' => fake()->numberBetween(1, 9),
            'area_id' => fake()->numberBetween(1, 40),
            'company_id' => fake()->numberBetween(1, 20),
            'user_id' => fake()->numberBetween(1, 10)
        ];
    }
}
