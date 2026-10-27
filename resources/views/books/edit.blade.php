@extends('layouts.app')

@section('content')

<h2>Edit Buku</h2>

@if ($errors->any())
<ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif

<form action="{{ route('books.update', $book->id) }}" method="POST">
    @csrf
    @method('PUT')

    <p>
        Judul:
        <input type="text" name="judul"
            value="{{ old('judul', $book->judul) }}" required>
    </p>

    <p>
        Penulis:
        <input type="text" name="penulis"
            value="{{ old('penulis', $book->penulis) }}" required>
    </p>

    <p>
        Tahun Terbit:
        <input type="number" name="tahun_terbit"
            value="{{ old('tahun_terbit', $book->tahun_terbit) }}"
            min="1000" max="9999" required>
    </p>
    <p>
        Kategori:
        <select name="category_id" required>
            <option value="">Pilih Kategori</option>
            @foreach ($categories as $category)
            <option value="{{ $category->id }}" {{ old('category_id', $book->category_id) == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
            @endforeach
        </select>
    </p>
    <p>
        Stok:
        <input type="number" name="stok"
            value="{{ old('stok', $book->stok) }}"
            min="0" required>
    </p>

    <button type="submit">Update</button>
    <a href="{{ route('books.index') }}">Kembali</a>
</form>

@endsection