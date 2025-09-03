<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laravel Page</title>

  {{-- Inline CSS --}}
  <style>
    body {
      font-family: Arial, sans-serif;
      line-height: 1.6;
    }
    .laravel {
      color: red;
      font-weight: bold;
    }
    a {
      color: blue;
      text-decoration: none;
    }
    a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <div style="text-align: center;">
    <img src="{{ asset('logo-laravel-2.png') }}" alt="Laravel Logo" width="160">
  </div>

  <h1>Apa Itu <span class="laravel">Laravel</span>?</h1>
  <p>
    <span class="laravel">Laravel</span> adalah <strong>framework aplikasi web berbasis PHP</strong> 
    yang dirancang untuk mempermudah developer membangun aplikasi modern.
  </p>

  <h2>Fitur Utama <span class="laravel">Laravel</span></h2>
  <ul>
    <li><strong>MVC (Model–View–Controller)</strong> — membuat kode lebih rapi dan terstruktur.</li>
    <li><strong>Sintaks elegan & ekspresif</strong> — mudah dibaca dan dipelihara.</li>
    <li><strong>Routing sederhana</strong> — memetakan URL ke fungsi/aksi dengan mudah.</li>
    <li><strong>ORM Eloquent</strong> — interaksi dengan database tanpa query SQL mentah.</li>
    <li><strong>Fitur bawaan lengkap</strong> — autentikasi, session, middleware, Blade template, API, queue, dan testing.</li>
    <li><strong>Ekosistem luas</strong> — banyak package tersedia untuk berbagai kebutuhan.</li>
    <li><strong>Komunitas besar</strong> — dokumentasi dan dukungan komunitas melimpah.</li>
  </ul>

  <p>
    Singkatnya, <span class="laravel">Laravel</span> adalah alat bantu yang mempercepat dan mempermudah pembuatan aplikasi web dengan PHP, 
    sehingga hasilnya lebih rapi, aman, dan modern.
  </p>

  <hr>

  <p>
    <a href="/home" class="confirm-exit">Kembali ke Home</a> | 
    <a href="/" class="confirm-exit">Pergi ke Welcome</a>
  </p>

  {{-- Inline JavaScript --}}
  <script>
    document.querySelectorAll('.confirm-exit').forEach(link => {
      link.addEventListener('click', function(e) {
        const yakin = confirm("Apakah Anda yakin ingin keluar dari halaman ini?");
        if (!yakin) {
          e.preventDefault(); 
        }
      });
    });
  </script>

</body>
</html>
