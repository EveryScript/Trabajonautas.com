<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Company;

class CompanySeeder extends Seeder
{
    public function run(): void
    {
        Company::create([
            'id' => 1,
            'company_name' => 'Industrias Lorem',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum, labore facere. Aspernatur necessitatibus similique quia accusantium magni aut sequi neque.',
            'company_type' => 'Public',
            'company_image' => 'default.jpg',
            'user_id' => 1
        ]);
        Company::create([
            'id' => 2,
            'company_name' => 'Empresa Ipsum',
            'description' => 'Lorem ipsum, Ipsum, labore facere. Aspernatur necessitatibus similique quia accusantium magni aut sequi neque.',
            'company_type' => 'Public',
            'company_image' => 'default.jpg',
            'user_id' => 1
        ]);
        Company::create([
            'id' => 3,
            'company_name' => 'Deadline Enterprises',
            'description' => 'Lorem ipsum, dolor sit amet labore facere. Aspernatur necessitatibus similique quia accusantium magni aut sequi neque.',
            'company_type' => 'Public',
            'company_image' => 'default.jpg',
            'user_id' => 2
        ]);
        Company::create([
            'id' => 4,
            'company_name' => 'Alexandria Corps',
            'description' => 'Lorem ipsum, dolor. Ipsum, labore facere. Aspernatur necessitatibus similique quia accusantium magni aut sequi neque.',
            'company_type' => 'Private',
            'company_image' => 'default.jpg',
            'user_id' => 2
        ]);
        Company::create([
            'id' => 5,
            'company_name' => 'Commonwealth',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum, labore facere. Aspernatur necessitatibus similique quia accusantium.',
            'company_type' => 'ONG',
            'company_image' => 'default.jpg',
            'user_id' => 3
        ]);
        Company::create([
            'id' => 6,
            'company_name' => 'Industrias Wayne',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum, labore facere. Aspernatur necessitatibus similique quia accusantium.',
            'company_type' => 'ONG',
            'company_image' => 'default.jpg',
            'user_id' => 3
        ]);
        Company::create([
            'id' => 7,
            'company_name' => 'Oceanside Airport',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum, labore facere. Aspernatur necessitatibus similique quia accusantium.',
            'company_type' => 'ONG',
            'company_image' => 'default.jpg',
            'user_id' => 3
        ]);
    }
}
