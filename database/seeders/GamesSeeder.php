<?php

namespace Database\Seeders;

use App\Models\Games;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $games = new Games();
        $games->platforms_id = 1;
        $games->categories_id = 1;
        $games->cover = "Imagen del Juego";
        $games->year = "2023-10-03";
        $games->save();
    }
}
