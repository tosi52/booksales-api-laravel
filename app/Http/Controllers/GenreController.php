<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;

class GenreController extends Controller
{
    // Read all data
    public function index()
    {
        $genres = Genre::all();

        return response()->json([
            'status'  => 'success',
            'message' => 'Data Genre berhasil diambil',
            'data'    => $genres
        ], 200);
    }

    // Create data
    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $genre = Genre::create([
            'name'        => $request->name,
            'description' => $request->description,
        ]);

        return response()->json([
            'status'  => 'success',
            'message' => 'Data Genre berhasil ditambahkan',
            'data'    => $genre
        ], 201);
    }
}