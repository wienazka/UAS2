<?php

namespace Database\Seeders;

use App\Models\Difficult;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DifficultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Difficult::create([
            'level' => 'easy',
        ]);
        Difficult::create([
            'level' => 'medium',
        ]);
        Difficult::create([
            'level' => 'hard',
        ]);
    }
}
