<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManagerController;

Route::get('/', [ManagerController::class, 'index'])->name('index');
Route::get('/create', [ManagerController::class, 'create_view'])->name('create_view');
Route::post('/create_product', [ManagerController::class, 'create'])->name('create');
