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
        $user = new User();
        $user->fullname = "Dainer Vargas";
        $user->email = "dainer2607@gmail.com";
        $user->password = Hash::make("123");
        $user->rol_id = 1;
        $user->save();
    }
}
