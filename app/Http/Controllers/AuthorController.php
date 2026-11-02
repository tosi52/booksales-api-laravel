<?php

namespace App\Http\Controllers;

use App\Models\Author;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::all();

        return response()->json([
            'status' => 'success',
            'message' => 'Data Author berhasil diambil',
            'data' => $authors
        ], 200);
    }
}