<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Home Page - Nicholas Jeremy Hendrajaya</title>

  {{-- Internal CSS --}}
  <style>
    body {
      font-family: 'Roboto', sans-serif;
    }
    .laravel-link {
      display: Internal-block;
      margin-top: 10px;
      padding: 8px 12px;
      background-color: #f9322c;
      color: #fff;
      text-decoration: none;
      border-radius: 6px;
      font-weight: bold;
    }
    .laravel-link:hover {
      background-color: #d52c25;
    }
  </style>
</head>
<body>

  <h1>Framework Web</h1>

  <p>
    Framework web adalah kerangka kerja yang membantu developer membangun website atau aplikasi web dengan lebih cepat,
    terstruktur, dan mudah dipelihara. Ibaratnya seperti pondasi dan peralatan siap pakai, sehingga tidak perlu membuat semuanya dari nol.
  </p>

  <h2>Manfaat Framework Web</h2>
  <ul>
    <li><strong>Mempercepat pengembangan</strong> — sudah ada fitur dasar seperti routing, autentikasi, dan koneksi database.</li>
    <li><strong>Kode lebih terstruktur</strong> — mudah dibaca, dipahami, dan dipelihara.</li>
    <li><strong>Keamanan lebih baik</strong> — banyak framework melindungi dari SQL Injection, XSS, CSRF, dll.</li>
    <li><strong>Mendukung kerja tim</strong> — standar penulisan kode jelas sehingga memudahkan kolaborasi.</li>
  </ul>

  <h2>Contoh Framework Web Populer</h2>
  <ul>
    <li>Laravel (PHP)</li>
    <li>Django (Python)</li>
    <li>Express (Node.js)</li>
    <li>Spring Boot (Java)</li>
    <li>React.js (JavaScript - Frontend)</li>
  </ul>

  <hr>

  <h2>Klik gambar atau link dibawah ini untuk pergi ke halaman Laravel.</h2>
  <p>
    <a href="/laravel" onclick="return confirmLaravel()">
      <img src="{{ asset('/logo-laravel.png') }}" alt="Laravel Logo" width="140">
    </a>
  </p>

  <p>
    <a href="/laravel" class="laravel-link" onclick="return confirmLaravel()">
      Pergi ke /laravel
    </a>
  </p>

  <p>
    <a href="/home">Kembali ke Home</a>
  </p>

  {{-- Internal JavaScript --}}
  <script>
    function confirmLaravel() {
      return confirm('Apakah Anda ingin pergi ke halaman Laravel?');
    }
  </script>
</body>
</html>
