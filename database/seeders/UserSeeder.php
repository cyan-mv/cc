<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'cyan',
                'email' => 'cyan.mv@gmail.com',
                'password' => Hash::make('toast'), // Secure password hashing
                'remember_token' => null,
            ],
            [
                'name' => 'vendor',
                'email' => 'vendor@gmail.com',
                'password' => Hash::make('toast'), // Secure password hashing
                'remember_token' => null,
            ]
        ];

        // Insert users into the database
        User::insert($users);
    }
}
