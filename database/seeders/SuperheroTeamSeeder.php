<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Team;
use App\Models\Superhero;

class SuperheroTeamSeeder extends Seeder
{
    public function run(): void
    {
        $justiceLeague = Team::updateOrCreate(
            ['name' => 'Justice League'], 
            ['description' => 'Group of superheroes from DC Universe'] 
        );

        $avengers = Team::updateOrCreate(
            ['name' => 'Avengers'], 
            ['description' => 'Earth\'s Mightiest Heroes from Marvel'] 
        );

        
        $justiceLeague->superheroes()->attach(1); 
        $avengers->superheroes()->attach(2); 
    }
}
