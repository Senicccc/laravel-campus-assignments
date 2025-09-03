<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Tugas 2</title>
    
    {{-- Tambahkan CSS --}}
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            text-align: center;
            margin: 0;
            padding: 0;
        }
        nav {
            background: #4a90e2;
            padding: 15px;
        }
        nav a {
            color: white;
            margin: 0 15px;
            font-weight: bold;
            text-decoration: none;
        }
        nav a:hover {
            text-decoration: underline;
        }
        img {
            margin-top: 20px;
            width: 300px;
            border-radius: 10px;
        }
        button {
            margin-top: 20px;
            padding: 10px 20px;
            background: #4a90e2;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background: #357ab8;
        }
    </style>
</head>
<body>

    {{-- Link --}}
    <nav>
        <a href="/">Home</a> | 
        <a href="https://laravel.com" target="_blank">Laravel</a>
    </nav>

    <h1>Selamat Datang di Tugas Laravel 12</h1>

    {{-- Tambahkan Image --}}
    <img src="https://laravel.com/img/logotype.min.svg" alt="Logo Laravel">

    {{-- Tombol untuk test JS --}}
    <button onclick="sayHello()">Klik Saya</button>

    {{-- Tambahkan JS --}}
    <script>
        function sayHello() {
            alert("Halo! Ini pesan dari JavaScript 😊");
        }
    </script>
</body>
</html>
