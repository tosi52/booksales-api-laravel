<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;



// Read All (index) dan Show (detail) untuk Genre & Author
Route::apiResource('genres', GenreController::class)->only(['index', 'show']);
Route::apiResource('authors', AuthorController::class)->only(['index', 'show']);

// Read All Book
Route::get('/books', [BookController::class, 'index']);




Route::middleware(['auth:sanctum'])->group(function () {
    // Create (store), Update (update), Destroy (destroy) untuk Genre & Author
    Route::apiResource('genres', GenreController::class)->only(['store', 'update', 'destroy']);
    Route::apiResource('authors', AuthorController::class)->only(['store', 'update', 'destroy']);
});