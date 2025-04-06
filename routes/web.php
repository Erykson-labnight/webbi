<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\UniverseController;
use App\Http\Controllers\SuperheroController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('genders', GenderController::class);
Route::resource('universes', UniverseController::class);
Route::resource('superheroes', SuperheroController::class);
