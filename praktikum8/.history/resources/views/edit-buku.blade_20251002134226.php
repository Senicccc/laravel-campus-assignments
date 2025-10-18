<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Buku</title>
</head>
<body>
    <h1>Edit Buku</h1>
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

    <form action="{{ route('buku.update', $buku->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="judul">Judul:</label><br>
        <input type="text" id="judul" name="judul" value="{{ old('judul', $buku->judul) }}"><br><br>
        <label for="pengarang">Pengarang:</label><br>
        <input type="text" id="pengarang" name="pengarang" value="{{ old('pengarang', $buku->pengarang) }}"><br><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>