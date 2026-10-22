<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GradeController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/grades',[GradeController::class, 'index']);

Route::get('/grades/create', [GradeController::class, 'create'])
    ->name('grades.create');

Route::post('/grades', [GradeController::class, 'store'])
    ->name('grades.store');

