@extends('layouts.app')

@section('content')

<h2>Daftar Buku</h2>

@if (session('success'))
<p>{{ session('success') }}</p>
@endif

@if ($errors->any())
<ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif

<a href="{{ route('books.create') }}">Tambah Buku</a>

<br><br>

<table border="1" cellpadding="10">
    <thead>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>PenulBelum ada kategoriis</th>
            <th>Tahun Terbit</th>
            <th>Stok</th>
            <th>Kategori</th>
            <th>Aksi</th>

        </tr>
    </thead>

    <tbody>
        @forelse ($books as $book)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $book->judul }}</td>
            <td>{{ $book->penulis }}</td>
            <td>{{ $book->tahun_terbit }}</td>
            <td>{{ $book->stok }}</td>
            <td>{{ $book->category?->name ?? 'Belum ada kategori'}}</td>
            <td>
                <a href="{{ route('books.edit', $book->id) }}">
                    Edit
                </a>

                <form action="{{ route('books.destroy', $book->id) }}"
                    method="POST"
                    style="display: inline;"
                    onsubmit="return confirm('Yakin ingin menghapus buku ini?')">
                    @csrf
                    @method('DELETE')

                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="6">Belum ada data buku.</td>
        </tr>
        @endforelse
    </tbody>
</table>

@endsection