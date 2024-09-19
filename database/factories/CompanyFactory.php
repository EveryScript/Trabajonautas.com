<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    // public $company_types = ['Pública', 'Privada', 'ONG'];

    public function definition(): array
    {
        return [
            'company_name' => fake()->word(),
            'description' => fake()->sentence(20),
            'company_image' => 'default.jpg',
            'company_type_id' => fake()->numberBetween(1, 3),
            'user_id' => fake()->numberBetween(1, 4)
        ];
    }
}
