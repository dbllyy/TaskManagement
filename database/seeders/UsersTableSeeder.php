<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Teknisi User',
            'email' => 'teknisi@example.com',
            'password' => bcrypt('password'),
            'role' => 'teknisi',
        ]);
    }
}

