<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // $table->id();
        //     $table->string('name');
        //     $table->string('email')->unique();
        //     $table->timestamp('email_verified_at')->nullable();
        //     $table->string('password');
        //     $table->rememberToken();
        //     $table->timestamps();

        User::create([
            'id' => 1,
            'name' => 'Rick Grimes',
            'email' => 'rickgrimes@email.com',
            'password' => '$2y$12$0OrSdJNJGqbeajtIRREgn.KUbseszhA5g2ZjXinqkxgvdDBx9oyG6' // 123456789
        ]);
        User::create([
            'id' => 2,
            'name' => 'Daryl Dixon',
            'email' => 'daryldixon@email.com',
            'password' => '$2y$12$0OrSdJNJGqbeajtIRREgn.KUbseszhA5g2ZjXinqkxgvdDBx9oyG6' // 123456789
        ]);
        User::create([
            'id' => 3,
            'name' => 'Maggie Ree',
            'email' => 'maggieree@email.com',
            'password' => '$2y$12$0OrSdJNJGqbeajtIRREgn.KUbseszhA5g2ZjXinqkxgvdDBx9oyG6' // 123456789
        ]);
    }
}
