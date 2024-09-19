<?php

namespace Database\Seeders;

use App\Models\UserRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserRole::create([
            'id' => 1,
            'user_role_name' => 'ADMIN'
        ]);
        UserRole::create([
            'id' => 2,
            'user_role_name' => 'USER'
        ]);
        UserRole::create([
            'id' => 3,
            'user_role_name' => 'CLIENT'
        ]);
    }
}
