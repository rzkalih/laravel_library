@extends('layouts.app')

@section('content')

<h2>Daftar Member</h2>

<table border="1" cellpadding="10">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Alamat</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($members as $member)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $member['nama'] }}</td>
            <td>{{ $member['email'] }}</td>
            <td>{{ $member['alamat'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection