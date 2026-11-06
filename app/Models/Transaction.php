<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'book_id',
        'quantity',
        'total_price',
        'status',
    ];

    // Relasi ke Model User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi ke Model Book
    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}