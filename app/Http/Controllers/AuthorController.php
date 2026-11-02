<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    // Read all data
    public function index()
    {
        $authors = Author::all();

        return response()->json([
            'status'  => 'success',
            'message' => 'Data Author berhasil diambil',
            'data'    => $authors
        ], 200);
    }

    // Create data
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
}