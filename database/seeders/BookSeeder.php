<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        $books = [
            ['title' => 'Harry Potter and the Sorcerer\'s Stone', 'description' => 'Novel fantasi sihir', 'price' => 150000, 'author_id' => 1],
            ['title' => 'A Game of Thrones', 'description' => 'Novel fantasi epik', 'price' => 200000, 'author_id' => 2],
            ['title' => 'The Hobbit', 'description' => 'Petualangan fantasi', 'price' => 175000, 'author_id' => 3],
            ['title' => 'Murder on the Orient Express', 'description' => 'Novel detektif misteri', 'price' => 120000, 'author_id' => 4],
            ['title' => 'The Shining', 'description' => 'Novel horor psikologis', 'price' => 160000, 'author_id' => 5],
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}