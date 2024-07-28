<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManagerController;

Route::get('/', function () { return view('sign.options'); })->name('options');
Route::get('/clinica', [ManagerController::class, 'index'])->name('clinica');
