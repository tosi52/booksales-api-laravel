<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;

class GenreController extends Controller
{
    // 1. Read All Data
    public function index()
    {
        $genres = Genre::all();

        return response()->json([
            'status'  => 'success',
            'message' => 'Data Genre berhasil diambil',
            'data'    => $genres
        ], 200);
    }

    // 2. Create Data
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

    // 3. Show Single Data
    public function show($id)
    {
        $genre = Genre::find($id);

        if (!$genre) {
            return response()->json([
                'status'  => 'error',
                'message' => 'Data Genre tidak ditemukan'
            ], 404);
        }

        return response()->json([
            'status'  => 'success',
            'message' => 'Detail Data Genre berhasil diambil',
            'data'    => $genre
        ], 200);
    }

    // 4. Update Data
    public function update(Request $request, $id)
    {
        $genre = Genre::find($id);

        if (!$genre) {
            return response()->json([
                'status'  => 'error',
                'message' => 'Data Genre tidak ditemukan'
            ], 404);
        }

        $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $genre->update([
            'name'        => $request->name,
            'description' => $request->description,
        ]);

        return response()->json([
            'status'  => 'success',
            'message' => 'Data Genre berhasil diperbarui',
            'data'    => $genre
        ], 200);
    }

    // 5. Destroy / Delete Data
    public function destroy($id)
    {
        $genre = Genre::find($id);

        if (!$genre) {
            return response()->json([
                'status'  => 'error',
                'message' => 'Data Genre tidak ditemukan'
            ], 404);
        }

        $genre->delete();

        return response()->json([
            'status'  => 'success',
            'message' => 'Data Genre berhasil dihapus'
        ], 200);
    }
}