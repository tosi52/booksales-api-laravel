<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionController extends Controller
{
    // 1. Read All Data (Akses: Admin Only)
    public function index()
    {
        $transactions = Transaction::with(['user', 'book'])->get();

        return response()->json([
            'status'  => 'success',
            'message' => 'Data Transaksi berhasil diambil',
            'data'    => $transactions
        ], 200);
    }

    // 2. Create Data (Akses: Customer Authenticated)
    public function store(Request $request)
    {
        $request->validate([
            'user_id'     => 'required|exists:users,id',
            'book_id'     => 'required|exists:books,id',
            'quantity'    => 'required|integer|min:1',
            'total_price' => 'required|numeric',
            'status'      => 'nullable|string',
        ]);

        $transaction = Transaction::create([
            'user_id'     => $request->user_id,
            'book_id'     => $request->book_id,
            'quantity'    => $request->quantity,
            'total_price' => $request->total_price,
            'status'      => $request->status ?? 'pending',
        ]);

        return response()->json([
            'status'  => 'success',
            'message' => 'Transaksi berhasil dibuat',
            'data'    => $transaction->load(['user', 'book'])
        ], 201);
    }

    // 3. Show Single Data (Akses: Customer Authenticated)
    public function show($id)
    {
        $transaction = Transaction::with(['user', 'book'])->find($id);

        if (!$transaction) {
            return response()->json([
                'status'  => 'error',
                'message' => 'Data Transaksi tidak ditemukan'
            ], 404);
        }

        return response()->json([
            'status'  => 'success',
            'message' => 'Detail Transaksi berhasil diambil',
            'data'    => $transaction
        ], 200);
    }

    // 4. Update Data (Akses: Customer Authenticated)
    public function update(Request $request, $id)
    {
        $transaction = Transaction::find($id);

        if (!$transaction) {
            return response()->json([
                'status'  => 'error',
                'message' => 'Data Transaksi tidak ditemukan'
            ], 404);
        }

        $request->validate([
            'quantity'    => 'sometimes|integer|min:1',
            'total_price' => 'sometimes|numeric',
            'status'      => 'sometimes|string',
        ]);

        $transaction->update($request->all());

        return response()->json([
            'status'  => 'success',
            'message' => 'Data Transaksi berhasil diperbarui',
            'data'    => $transaction->load(['user', 'book'])
        ], 200);
    }

    // 5. Destroy Data (Akses: Admin Only)
    public function destroy($id)
    {
        $transaction = Transaction::find($id);

        if (!$transaction) {
            return response()->json([
                'status'  => 'error',
                'message' => 'Data Transaksi tidak ditemukan'
            ], 404);
        }

        $transaction->delete();

        return response()->json([
            'status'  => 'success',
            'message' => 'Data Transaksi berhasil dihapus'
        ], 200);
    }
}