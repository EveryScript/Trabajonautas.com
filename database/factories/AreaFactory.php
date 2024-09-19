<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AreaFactory extends Factory
{
    public function definition(): array
    {
        return [
            'area_name' => fake()->word(),
            'description' => fake()->sentence(20)
        ];
    }
}
