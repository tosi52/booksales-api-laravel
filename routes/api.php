<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;

// Menggunakan apiResource untuk otomatis mendaftarkan route index, store, show, update, destroy
Route::apiResource('genres', GenreController::class);
Route::apiResource('authors', AuthorController::class);

// Route untuk Book
Route::get('/books', [BookController::class, 'index']);