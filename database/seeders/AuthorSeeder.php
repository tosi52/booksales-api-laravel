<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    public function run(): void
    {
        $authors = [
            ['name' => 'J.K. Rowling', 'email' => 'jkrowling@example.com'],
            ['name' => 'George R.R. Martin', 'email' => 'grrm@example.com'],
            ['name' => 'J.R.R. Tolkien', 'email' => 'tolkien@example.com'],
            ['name' => 'Agatha Christie', 'email' => 'agatha@example.com'],
            ['name' => 'Stephen King', 'email' => 'sking@example.com'],
        ];

        foreach ($authors as $author) {
            Author::create($author);
        }
    }
}