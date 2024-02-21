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
        User::create(
            /* [
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin@gmail.com'),
            'role' => 'admin',
        ], */
        /* [
            'name' => 'Agent',
            'username' => 'agent',
            'email' => 'agent@gmail.com',
            'password' => Hash::make('agent@gmail.com'),
            'role' => 'agent',
        ], */
        [
            'name' => 'user',
            'username' => 'user',
            'email' => 'user@gmail.com',
            'password' => Hash::make('user@gmail.com'),
            ],
    );
    }
}
