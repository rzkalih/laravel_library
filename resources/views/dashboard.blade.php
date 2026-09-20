@extends('layouts.app')

@section('content')

<h2>{{ $judul }}</h2>

<p>{{ $deskripsi }}</p>

<h3>Informasi Perpustakaan</h3>

<p>Jumlah Buku: {{ $jumlahBuku }}</p>

<p>Jumlah Member: {{ $jumlahMember }}</p>

<p>Jumlah Kategori: {{ $jumlahKategori }}</p>

@endsection