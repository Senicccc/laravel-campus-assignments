@extends('app')

@section('content')
    <h1>Welcome to Buku1 Page</h1>
    <table border="1">
        <tr>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
        </tr>
        @foreach($data as $buku)
        <tr>
            <td>{{ $buku->judul }}</td>
            <td>{{ $buku->pengarang }}</td>
            <td>{{ $buku->penerbit }}</td>
        </tr>
        @endforeach
    </table>
@endsection