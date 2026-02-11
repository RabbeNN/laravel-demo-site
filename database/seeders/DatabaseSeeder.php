<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Project;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Skapa en användare för login
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password') // Hash::make korrekt här
        ]);

        // Exempelprojekt
        Project::create([
            'title' => 'Kommunsida Rubberduckie kommun',
            'description' => 'En modern Kommunsida',
            'image' => 'kommunsidan.png'
        ]);

        Project::create([
            'title' => 'Företagswebb 2',
            'description' => 'En responsiv webblösning',
            'image' => 'https://via.placeholder.com/400x200'
        ]);
    }
}
