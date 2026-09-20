@extends('layouts.app')

@section('content')

<h2>Detail Buku</h2>

@if ($book)
<p>ID Buku: {{ $book['id'] }}</p>
<p>Judul: {{ $book['judul'] }}</p>
<p>Penulis: {{ $book['penulis'] }}</p>
<p>Tahun Terbit: {{ $book['tahun_terbit'] }}</p>

<br>

<a href="/buku">Kembali ke Daftar Buku</a>
@else
<p>Buku tidak ditemukan.</p>

<a href="/buku">Kembali ke Daftar Buku</a>
@endif

@endsection