@extends('layouts.app')

@section('content')

<h2>Daftar Category</h2>

<table border="1" cellpadding="10">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Category</th>
            <th>Deskripsi</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($categories as $category)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $category['nama'] }}</td>
            <td>{{ $category['deskripsi'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection