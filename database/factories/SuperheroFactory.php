<?php

namespace Database\Factories;

use App\Models\Superhero;
use App\Models\Gender;  
use App\Models\Universe; 
use Illuminate\Database\Eloquent\Factories\Factory;

class SuperheroFactory extends Factory
{
    protected $model = Superhero::class;

    public function definition()
    {
        return [
            'hero_name' => $this->faker->unique()->name(),
            'real_name' => $this->faker->name(),
            'gender_id' => Gender::inRandomOrder()->first()->id,  
            'universe_id' => Universe::inRandomOrder()->first()->id, 
            'description' => $this->faker->paragraph(),
            'image_path' => $this->faker->imageUrl(),
        ];
    }
}
