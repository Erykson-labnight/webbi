<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Superhero;

class SuperheroSeeder extends Seeder
{
    public function run()
    {
        Superhero::factory()->count(10)->create();
    }
}

