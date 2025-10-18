<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Buku</title>
</head>
<body>
    <h1>Data Buku</h1>
    <a href="{{ route('buku.create') }}">Tambah Buku</a>
    <br>

    @if(session('success'))
        <div style="color: green">{{ session('success') }}</div>
    @endif

    <br>

    <table border="1" cellpadding="10" cellspacing="0">
        tr
</body>
</html>