@extends('app')

@section('content')
    <div class="container">
        <h1>Daftar Toko</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Nama Toko</th>
                    <th>Cabang</th>
                    <th>Alamat</th>
                    <th>No. Telp</th>
                    <th>Pemilik</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $toko)
                <tr>
                    <td>{{ $toko->nama_toko }}</td>
                    <td>{{ $toko->cabang }}</td>
                    <td>{{ $toko->alamat }}</td>
                    <td>{{ $toko->no_telp }}</td>
                    <td>{{ $toko->pemilik }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection