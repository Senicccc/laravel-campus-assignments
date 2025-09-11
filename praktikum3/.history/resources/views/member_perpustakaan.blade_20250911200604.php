@extends('app')

@section('content')
    <h1>Welcome to Member Page</h1>
    <div>
        <a href="tambahMember"><button>Tambah Member</button></a>
    </div>
    <table border="1">
        <thead>
            <tr>
                <th>Nama Lengkap</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>No HP</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $member)
                <tr>
                    <td>{{ $buku->judul }}</td>
                    <td>{{ $buku->pengarang }}</td>
                    <td>{{ $buku->penerbit }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection