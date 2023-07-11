<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'name' => 'Assasin',
            'description' => 'Assasin user',
        ]);
        Role::create([
            'name' => 'Mage',
            'description' => 'Mage user',
        ]);
        Role::create([
            'name' => 'Marksman',
            'description' => 'Marksman user',
        ]);
        Role::create([
            'name' => 'Fighter',
            'description' => 'Fighter user',
        ]);
        Role::create([
            'name' => 'Tank',
            'description' => 'Tank user',
        ]);
    }
}
