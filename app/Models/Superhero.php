<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Gender;
use App\Models\Universe;
use App\Models\Enemy;
use App\Models\Team;
use App\Models\Power;

class Superhero extends Model
{
    use HasFactory;

    protected $fillable = [
        'hero_name',
        'real_name',
        'gender_id',
        'universe_id',
        'description',
        'image_path',
    ];

    public function gender()
    {
        return $this->belongsTo(Gender::class);
    }

    public function universe()
    {
        return $this->belongsTo(Universe::class);
    }

    public function enemies()
    {
        return $this->belongsToMany(Enemy::class, 'superhero_enemy');
    }

    public function teams()
    {
        return $this->belongsToMany(Team::class, 'superhero_team');
    }

    public function powers()
    {
        return $this->belongsToMany(Power::class, 'superhero_power');
    }
}
