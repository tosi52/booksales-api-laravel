<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;

// Rute untuk Genre (Read & Create)
Route::get('/genres', [GenreController::class, 'index']);
Route::post('/genres', [GenreController::class, 'store']);

// Rute untuk Author (Read & Create)
Route::get('/authors', [AuthorController::class, 'index']);
Route::post('/authors', [AuthorController::class, 'store']);

// Rute untuk Book (Read)
Route::get('/books', [BookController::class, 'index']);