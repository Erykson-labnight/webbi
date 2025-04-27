<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Enemy;
use App\Models\Superhero;

class SuperheroEnemySeeder extends Seeder
{
    public function run(): void
    {
        $joker = Enemy::updateOrCreate(
            ['name' => 'Joker'], 
            ['description' => 'El enemigo más icónico de Batman.'] 
        );

        $thanos = Enemy::updateOrCreate(
            ['name' => 'Thanos'], 
            ['description' => 'El titán loco.'] 
        );

        $joker->superheroes()->attach(1); 
        $thanos->superheroes()->attach(2);
    }
}
