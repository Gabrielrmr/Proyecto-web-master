<?php

namespace Database\Seeders;

use App\Models\Platforms;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlatformsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $platform = new Platforms();
        $platform->name = "Play Station";
        $platform->save();
    }
}
