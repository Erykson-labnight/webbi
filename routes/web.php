<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenderController;

Route::get('/genders', [GenderController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
