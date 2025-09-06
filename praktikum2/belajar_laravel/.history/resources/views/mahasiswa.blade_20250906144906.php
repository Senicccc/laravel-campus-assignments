<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        @foreach($mahasiswa as $m)
            <li>
                <strong>{{ $m->nama }}</strong> - 
                NPM: {{ $m->npm }}, 
                Fakultas: {{ $m->fakultas }}, 
                Prodi: {{ $m->prodi }}, 
                Semester: {{ $m->semester }}
            </li>
        @endforeach
    </ul>
</body>
</html>
