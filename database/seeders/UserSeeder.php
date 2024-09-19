<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    protected $user_password = '$2y$12$0OrSdJNJGqbeajtIRREgn.KUbseszhA5g2ZjXinqkxgvdDBx9oyG6'; // 123456789

    public function run(): void
    {
        User::create([
            'id' => 1,
            'name' => 'Rick Grimes',
            'email' => 'rickgrimes@email.com',
            'password' => $this->user_password,
            'user_role_id' => 1
        ]);
        User::create([
            'id' => 2,
            'name' => 'Daryl Dixon',
            'email' => 'daryldixon@email.com',
            'password' => $this->user_password,
            'user_role_id' => 2
        ]);
        User::create([
            'id' => 3,
            'name' => 'Maggie Rhee',
            'email' => 'maggieree@email.com',
            'password' => $this->user_password,
            'user_role_id' => 2
        ]);
        User::create([
            'id' => 4,
            'name' => 'Eugene Porter',
            'email' => 'eugeneporter@email.com',
            'password' => $this->user_password,
            'user_role_id' => 2
        ]);
        User::create([
            'id' => 5,
            'name' => 'Rosita Espinoza',
            'email' => 'rositaespinoza@email.com',
            'password' => $this->user_password,
            'user_role_id' => 3
        ]);
        User::create([
            'id' => 6,
            'name' => 'Negan',
            'email' => 'negan@email.com',
            'password' => $this->user_password,
            'user_role_id' => 3
        ]);
        User::create([
            'id' => 7,
            'name' => 'Carl Grimes',
            'email' => 'carlgrimes@email.com',
            'password' => $this->user_password,
            'user_role_id' => 3
        ]);
        User::create([
            'id' => 8,
            'name' => 'Glenn Rhee',
            'email' => 'glennrhee@email.com',
            'password' => $this->user_password,
            'user_role_id' => 3
        ]);
        User::create([
            'id' => 9,
            'name' => 'Carol Peletier',
            'email' => 'carolpeletier@email.com',
            'password' => $this->user_password,
            'user_role_id' => 3
        ]);
        User::create([
            'id' => 10,
            'name' => 'Aaron Wright',
            'email' => 'aaronwright@email.com',
            'password' => $this->user_password,
            'user_role_id' => 3
        ]);
    }
}
