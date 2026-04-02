<?php

use App\Http\Controllers\RoutineController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [RoutineController::class, 'index'])->name('routines.index');
