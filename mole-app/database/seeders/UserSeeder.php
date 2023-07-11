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
        
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => 'admin1234',
            'role' => 'admin',
        ]);
        User::create([
            'name' => 'Muh Zaidan Ramdhan',
            'email' => 'muhammadzaidanramdhan509@gmail.com',
            'password' => 'zaidan',
            'role' => 'user',
        ]);
        User::create([
            'name' => 'Dinda Maulidia',
            'email' => 'dindamaulidia@gmail.com',
            'password' => 'dinda',
            'role' => 'user',
        ]);
        User::create([
            'name' => 'Agil Al-munawwir',
            'email' => 'agil@gmail.com',
            'password' => 'agil',
            'role' => 'user',
        ]);
    }
}
