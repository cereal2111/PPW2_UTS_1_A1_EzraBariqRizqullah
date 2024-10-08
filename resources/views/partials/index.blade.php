@extends('layouts.app')

@section('title', 'Daftar Pemain MU')

@section('content')
    <table border="1">
        <thead>
            <tr>
                <th>Nama Pemain</th>
                <th>No Punggung</th>
                <th>Posisi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pemains as $pemain)
            <tr>
                <td>{{ $pemain->nama_pemain }}</td>
                <td>{{ $pemain->no_punggung }}</td>
                <td>{{ $pemain->posisi }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
