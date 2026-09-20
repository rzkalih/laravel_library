<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>daftar buku</h1>

    <p>Sistem informasi perpustakaan</p>

    <ul>
        @foreach ($books as $book)
        <li>
            <strong>{{ $book['judul'] }}</strong> - {{ $book['penulis'] }} ({{ $book['tahun_terbit'] }})
        </li>
        @endforeach
    </ul>
</body>

</html>