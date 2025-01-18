<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    
    public function run(): void
    {
        User::create([
            "name" => "Richard",
            "email" => "r@mail.com",
            "password" => Hash::make("12345"),
            "role" => "admin"
        ]);
        User::create([
            "name" => "Victoria",
            "email" => "v@mail.com",
            "password" => Hash::make("12345")
        ]);
        User::create([
            "name" => "Eliana",
            "email" => "e@mail.com",
            "password" => Hash::make("12345")
        ]);
    }
}
