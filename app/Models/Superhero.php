<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Gender;
use App\Models\Universe;

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
}
