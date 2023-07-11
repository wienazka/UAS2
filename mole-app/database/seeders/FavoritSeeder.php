<?php

namespace Database\Seeders;

use App\Models\Favorit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FavoritSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Favorit::create([
            'user_id' => 2,
            'hero_id' => 2,
            'date' => '2023-10-20',
            'notes' => 'example',
            'rating' => 9,
        ]);
        Favorit::create([
            'user_id' => 3,
            'hero_id' => 1,
            'date' => '2023-12-12',
            'notes' => 'example',
            'rating' => 9.1,
        ]);
        Favorit::create([
            'user_id' => 4,
            'hero_id' => 3,
            'date' => '2023-11-09',
            'notes' => 'example',
            'rating' => 9.1,
        ]);
    }
}
