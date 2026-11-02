<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    // 1. Read All Data
    public function index()
    {
        $authors = Author::all();

        return response()->json([
            'status'  => 'success',
            'message' => 'Data Author berhasil diambil',
            'data'    => $authors
        ], 200);
    }

    // 2. Create Data
    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email',
        ]);

        $author = Author::create([
            'name'  => $request->name,
            'email' => $request->email,
        ]);

        return response()->json([
            'status'  => 'success',
            'message' => 'Data Author berhasil ditambahkan',
            'data'    => $author
        ], 201);
    }

    // 3. Show Single Data
    public function show($id)
    {
        $author = Author::find($id);

        if (!$author) {
            return response()->json([
                'status'  => 'error',
                'message' => 'Data Author tidak ditemukan'
            ], 404);
        }

        return response()->json([
            'status'  => 'success',
            'message' => 'Detail Data Author berhasil diambil',
            'data'    => $author
        ], 200);
    }

    // 4. Update Data
    public function update(Request $request, $id)
    {
        $author = Author::find($id);

        if (!$author) {
            return response()->json([
                'status'  => 'error',
                'message' => 'Data Author tidak ditemukan'
            ], 404);
        }

        $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email',
        ]);

        $author->update([
            'name'  => $request->name,
            'email' => $request->email,
        ]);

        return response()->json([
            'status'  => 'success',
            'message' => 'Data Author berhasil diperbarui',
            'data'    => $author
        ], 200);
    }

    // 5. Destroy / Delete Data
    public function destroy($id)
    {
        $author = Author::find($id);

        if (!$author) {
            return response()->json([
                'status'  => 'error',
                'message' => 'Data Author tidak ditemukan'
            ], 404);
        }

        $author->delete();

        return response()->json([
            'status'  => 'success',
            'message' => 'Data Author berhasil dihapus'
        ], 200);
    }
}