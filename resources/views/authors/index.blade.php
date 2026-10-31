<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Author</title>
</head>
<body>
    <h1>Daftar Author</h1>
    <ul>
        @foreach($authors as $author)
            <li><strong>{{ $author['name'] }}</strong> ({{ $author['email'] }})</li>
        @endforeach
    </ul>
</body>
</html>