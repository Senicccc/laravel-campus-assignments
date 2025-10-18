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
        <label for="kategori_buku_id">Kategori Buku:</label><br>
        <select id="kategori_buku_id" name="kategori_buku_id">
            <option value="">Pilih Kategori</option>
            @foreach($kategoriBuku as $kategori)
                <option value="{{ $kategori->id }}" {{ old('kategori_buku_id') == $kategori->id ? 'selected' : '' }}>
                    {{ $kategori->nama_kategori }}
                </option>
            @endforeach
        </select><br><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>