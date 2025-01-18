<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::create([
            "name" => "Joni",
            "last_name" => "Smith",
            "phone" => "5698524",
            "email" => "Smith@mail.com",
            "address" => "El dorado",
            "city" => "Lima",
            "country" => "Peru",
            "note" => "Estas son un ejemplo de notas",
            "user_id" => 2
        ]);
        Contact::create([
            "name" => "Elpidio",
            "last_name" => "Smith",
            "phone" => "5698524",
            "email" => "Smith@mail.com",
            "address" => "Mucuchies",
            "city" => "Merida",
            "country" => "Venezuela",
            "note" => "Estas son un ejemplo de notas",
            "user_id" => 2
        ]);
        Contact::create([
            "name" => "Jesus",
            "last_name" => "Smith",
            "phone" => "5698524",
            "email" => "Smith@mail.com",
            "address" => "San Pedro",
            "city" => "Concepcion",
            "country" => "Chile",
            "note" => "Estas son un ejemplo de notas",
            "user_id" => 3
        ]);
        

    }
}
