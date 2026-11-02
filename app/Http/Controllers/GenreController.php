<?php

namespace App\Http\Controllers;

class GenreController extends Controller
{
    public function index()
    {
        $genres = [
            ['id' => 1, 'name' => 'Fiction', 'description' => 'Fictional stories'],
            ['id' => 2, 'name' => 'Non-Fiction', 'description' => 'Real stories'],
            ['id' => 3, 'name' => 'Fantasy', 'description' => 'Magical and mythical worlds'],
            ['id' => 4, 'name' => 'Mystery', 'description' => 'Detective and mystery books'],
            ['id' => 5, 'name' => 'Horror', 'description' => 'Scary novel stories'],
        ];

        return response()->json([
            'status' => 'success',
            'message' => 'Data Genre berhasil diambil',
            'data' => $genres
        ], 200);
    }
}