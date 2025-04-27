<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Power;
use App\Models\Superhero;

class SuperheroPowerSeeder extends Seeder
{
    public function run(): void
    {
        $superStrength = Power::updateOrCreate(
            ['name' => 'Super Strength'], 
            ['description' => 'Increase Strength at superhuman level'] 
        );

        $flight = Power::updateOrCreate(
            ['name' => 'Flight'], 
            ['description' => 'Capacity to move in all directions'] 
        );

        
        $superStrength->superheroes()->attach(1); 
        $flight->superheroes()->attach(2); 
    }
}
