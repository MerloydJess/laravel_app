<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('welcome');
});
use App\Http\Controllers\AboutMeController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\HobbiesController;

// routes/web.php
Route::get('/about', [AboutMeController::class, 'index'])->name('about');
Route::get('/skills', [SkillsController::class, 'index'])->name('skills');
Route::get('/hobbies', [HobbiesController::class, 'index'])->name('hobbies');



