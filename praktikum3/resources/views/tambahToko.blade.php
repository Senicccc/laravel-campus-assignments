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
            <label for="alamat">Alamat:</label>
            <input type="text" id="alamat" name="alamat" required>  
        </div>
        <div>
            <label for="no_telp">No. Telp:</label>
            <input type="text" id="no_telp" name="no_telp">
        </div>
        <div>
            <label for="pemilik">Pemilik:</label>
            <input type="text" id="pemilik" name="pemilik">
        </div>
        <button type="submit">Simpan</button>
    </form>
@endsection