@extends('app')

@section('content')
    <h1>Welcome to Tambah Page</h1>
    <form action="/simpanBuku" method="post">
        @csrf
        <div>
            <label for="judul">Judul:</label>
            <input type="text" id="judul" name="judul" required>
        </div>
        <div>
            <label for="pengarang">Pengarang:</label>
            <input type="text" id="pengarang" name="pengarang" required>
        </div>
        <div>
            <label for="penerbit">Penerbit:</label>
            <input type="text" id="penerbit" name="penerbit" required>  
        </div>
        <button type="submit">Simpan</button>
    </form>
@endsection