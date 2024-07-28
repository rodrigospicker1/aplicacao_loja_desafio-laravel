<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManagerController;

Route::get('/', [ManagerController::class, 'index'])->name('dashboard');
Route::get('/create', [ManagerController::class, 'create'])->name('create');
