@extends('app')

@section('content')
    <h1>Welcome to Tambah Toko Page</h1>
    <form action="/simpanToko" method="post">
        @csrf
        <div>
            <label for="nama_toko">Nama Toko:</label>
            <input type="text" id="nama_toko" name="nama_toko" required>
        </div>
        <div>   
            <label for="cabang">Cabang:</label>
            <input type="text" id="cabang" name="cabang" required>
        </div>
        <div>
            <label for="penerbit">Penerbit:</label>
            <input type="text" id="penerbit" name="penerbit" required>  
        </div>
        <button type="submit">Simpan</button>
    </form>
@endsection