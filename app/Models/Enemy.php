<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enemy extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    public function superheroes()
    {
        return $this->belongsToMany(Superhero::class, 'superhero_enemy');
    }
}
