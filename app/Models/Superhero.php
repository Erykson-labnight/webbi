<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Superhero extends Model
{
    use HasFactory;
    
    protected $fillable = ['hero_name', 'real_name', 'gender_id', 'universe_id', 'description', 'image_path'];
}
