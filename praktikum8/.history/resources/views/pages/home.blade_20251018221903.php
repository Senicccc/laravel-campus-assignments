@extends('layouts.app')

@section('content')
    <h1>Data Buku</h1>
    <a href="{{ route('buku.create') }}">Tambah Buku</a>
    <br>

    @if(session('success'))
        <div style="color: green">{{ session('success') }}</div>
    @endif

    <br>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $buku)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $buku->judul }}</td>
                <td>{{ $buku->pengarang }}</td>
                <td>{{ $buku->kategoriBuku ? $buku->kategoriBuku->nama_kategori : 'Tidak ada kategori' }}</td>
                <td>
                    <a href="{{ route('buku.edit', $buku->id) }}">Edit</a>
                    <form action="{{ route('buku.destroy', $buku->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
