<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoria = new Categories();
        $categoria->name = "AVENTURA";
        $categoria->save();

        $categoria = new Categories();
        $categoria->name = "FUTBOL";
        $categoria->save();
    }
}
