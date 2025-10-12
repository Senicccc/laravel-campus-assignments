<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Buku</title>
</head>
<body>
    <h1>Tambah Buku</h1>
    <a href="{{ route('buku.index') }}">Kembali ke Daftar Buku</a>
    <br><br>
    @if($errors->any())
        <div style="color: red">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('buku.store') }}" method="POST">
        @csrf
        <label for="judul">Judul:</label><br>
        <input type="text" id="judul" name="judul" value="{{ old('judul') }}"><br><br>
        <label for="pengarang">Pengarang:</label><br>
        <input type="text" id="pengarang" name="pengarang" value="{{ old('pengarang') }}"><br><br>
        <button type="submit">Simpan</button>
</body>
</html>