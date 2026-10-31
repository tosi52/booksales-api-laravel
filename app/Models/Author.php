<?php

namespace App\Models;

class Author
{
    public static function all()
    {
        return [
            ['id' => 1, 'name' => 'J.K. Rowling', 'email' => 'jkrowling@example.com'],
            ['id' => 2, 'name' => 'George R.R. Martin', 'email' => 'grrm@example.com'],
            ['id' => 3, 'name' => 'J.R.R. Tolkien', 'email' => 'tolkien@example.com'],
            ['id' => 4, 'name' => 'Agatha Christie', 'email' => 'agatha@example.com'],
            ['id' => 5, 'name' => 'Stephen King', 'email' => 'sking@example.com'],
        ];
    }
}