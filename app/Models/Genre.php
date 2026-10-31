<?php

namespace App\Models;

class Genre
{
    public static function all()
    {
        return [
            ['id' => 1, 'name' => 'Fiction', 'description' => 'Fictional stories and novels'],
            ['id' => 2, 'name' => 'Non-Fiction', 'description' => 'Real life stories and facts'],
            ['id' => 3, 'name' => 'Science Fiction', 'description' => 'Futuristic and science concepts'],
            ['id' => 4, 'name' => 'Fantasy', 'description' => 'Magical and mythical worlds'],
            ['id' => 5, 'name' => 'Mystery', 'description' => 'Detective and crime solving stories'],
        ];
    }
}