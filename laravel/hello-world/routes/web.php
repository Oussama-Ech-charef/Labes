<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'hello')->name('hello');
Route::get('/categories', [CategoryController::class, 'index'])
    ->name('categories.index');
