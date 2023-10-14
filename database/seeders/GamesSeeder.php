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
        $games->name = 'Mario Bross';
        $games->platforms_id = 2;
        $games->categories_id = 1;
        $games->descripcion = "Super Mario RPG es el primer juego de rol de la franquicia de Mario, basado en los principales elementos de
        las franquicias de juegos de rol de Square, como Final Fantasy. La forma principal de luchar contra los
        enemigos es el combate por turnos con un grupo de hasta tres personajes.";
        $games->cover = "supermariorpg.jpeg";
        $games->year = "2023-10-03";
        $games->save();

        $games = new Games();
        $games->name = 'PS-2024';
        $games->platforms_id = 1;
        $games->categories_id = 2;
        $games->descripcion = "PS-2024 es el primer juego de rol de la franquicia de Mario, basado en los principales elementos de
        las franquicias de juegos de rol de Square, como Final Fantasy. La forma principal de luchar contra los
        enemigos es el combate por turnos con un grupo de hasta tres personajes.";
        $games->cover = "fc24.jpeg";
        $games->year = "2023-10-03";
        $games->save();
    }
}
