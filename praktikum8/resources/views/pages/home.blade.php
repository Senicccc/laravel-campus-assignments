@extends('layouts.app')

@section('content')
    <div>
        @if ($errors->any())
            <div style="color: red;">
                {{ $errors->first() }}
            </div>
        @elseif (session('success'))
            <div style="color: green;">
                {{ session('success') }}
            </div>
        @endif
    </div>

    <h1>Welcome to Home Page</h1>

    <h2>Data Buku</h2>
    <a href="{{ route('buku.create') }}">Tambah Buku</a>
    <br><br>

    @if (session('success'))
        <div style="color: green">{{ session('success') }}</div>
    @endif

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
            @forelse ($data as $buku)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $buku->judul }}</td>
                    <td>{{ $buku->pengarang }}</td>
                    <td>{{ $buku->kategoriBuku ? $buku->kategoriBuku->nama_kategori : 'Tidak ada kategori' }}</td>
                    <td>
                        <a href="{{ route('buku.edit', $buku->id) }}">Edit</a>
                        <form action="{{ route('buku.destroy', $buku->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" style="text-align:center;">Tidak ada data buku</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
