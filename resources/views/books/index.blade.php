<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Buku</title>
</head>
<body>
    <h1>Daftar Buku</h1>
    <ul>
        @foreach($books as $book)
            <li>
                <strong>{{ $book->title }}</strong> - Rp {{ number_format($book->price, 0, ',', '.') }}
                <br>
                <small>Penulis: {{ $book->author->name }} | Deskripsi: {{ $book->description }}</small>
            </li>
        @endforeach
    </ul>
</body>
</html>