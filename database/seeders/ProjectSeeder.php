<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
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
