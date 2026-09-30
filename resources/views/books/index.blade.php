@extends('layouts.app')

@section('content')

<h2>Daftar Buku</h2>

<table border="1" cellpadding="10">
    <thead>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Tahun Terbit</th>
            <th>Stok</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($books as $book)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $book->judul }}</td>
            <td>{{ $book->penulis }}</td>
            <td>{{ $book->tahun_terbit }}</td>
            <td>{{ $book->stok }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection