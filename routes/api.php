<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\GenderController;
use App\Http\Controllers\API\SuperheroController;
use App\Http\Controllers\API\SuperheroEnemyController;
use App\Http\Controllers\API\SuperheroPowerController;
use App\Http\Controllers\API\SuperheroTeamController;
use App\Http\Controllers\API\UniverseController;

// Rutas públicas
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Rutas de géneros
Route::prefix('genders')->group(function () {
    Route::get('/', [GenderController::class, 'index']); 
    Route::post('/', [GenderController::class, 'store']); 
    Route::get('{gender}', [GenderController::class, 'show']); 
    Route::put('{gender}', [GenderController::class, 'update']); 
    Route::delete('{gender}', [GenderController::class, 'destroy']); 
});

// Rutas de superhéroes
Route::prefix('superheroes')->group(function () {
    Route::get('/', [SuperheroController::class, 'index']); 
    Route::post('/', [SuperheroController::class, 'store']); 
    Route::get('{superhero}', [SuperheroController::class, 'show']); 
    Route::put('{superhero}', [SuperheroController::class, 'update']); 
    Route::delete('{superhero}', [SuperheroController::class, 'destroy']); 
});

// Rutas de enemigos de superhéroes
Route::prefix('enemies')->group(function () {
    Route::get('/', [SuperheroEnemyController::class, 'index']); 
    Route::post('/', [SuperheroEnemyController::class, 'store']); 
    Route::get('{id}', [SuperheroEnemyController::class, 'show']); 
    Route::put('{id}', [SuperheroEnemyController::class, 'update']); 
    Route::delete('{id}', [SuperheroEnemyController::class, 'destroy']); 
});

// Rutas de poderes de superhéroes
Route::prefix('powers')->group(function () {
    Route::get('/', [SuperheroPowerController::class, 'index']); 
    Route::post('/', [SuperheroPowerController::class, 'store']); 
    Route::get('{id}', [SuperheroPowerController::class, 'show']); 
    Route::put('{id}', [SuperheroPowerController::class, 'update']); 
    Route::delete('{id}', [SuperheroPowerController::class, 'destroy']);
});

// Rutas de equipos de superhéroes
Route::prefix('teams')->group(function () {
    Route::get('/', [SuperheroTeamController::class, 'index']); 
    Route::post('/', [SuperheroTeamController::class, 'store']); 
    Route::get('{id}', [SuperheroTeamController::class, 'show']); 
    Route::put('{id}', [SuperheroTeamController::class, 'update']);
    Route::delete('{id}', [SuperheroTeamController::class, 'destroy']); 
});

// Rutas de universos
Route::prefix('universes')->group(function () {
    Route::get('/', [UniverseController::class, 'index']);
    Route::post('/', [UniverseController::class, 'store']); 
    Route::get('{universe}', [UniverseController::class, 'show']); 
    Route::put('{universe}', [UniverseController::class, 'update']);
    Route::delete('{universe}', [UniverseController::class, 'destroy']);
});
