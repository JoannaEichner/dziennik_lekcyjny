<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\AuthController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/grades',[GradeController::class, 'index'])
    ->middleware('auth');

Route::get('/grades/create', [GradeController::class, 'create'])
    ->middleware(['auth', 'role:teacher,admin'])
    ->name('grades.create');

Route::post('/grades', [GradeController::class, 'store'])
    ->middleware(['auth', 'role:teacher,admin'])
    ->name('grades.store');

Route::get('/login', [AuthController::class, 'showLogin'])
    ->name('login');

Route::post('/login', [AuthController::class, 'login'])
    ->name('login.store');

Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth') // Pozwala korzystać tylko zalogowanym użytkonikom
    ->name('logout');