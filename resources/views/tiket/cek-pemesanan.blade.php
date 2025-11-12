<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cek Pemesanan Tiket</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
            .navbar-brand {
            font-size: 20px;
            letter-spacing: 0.5px;
        }

        .nav-link {
            color: #ffffffcc !important;
            transition: 0.3s;
        }

        .nav-link:hover,
        .nav-link.active {
            color: #fff !important;
            font-weight: bold;
            text-decoration: underline;
        }


  </style>
</head>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                <img src="https://cdn-icons-png.flaticon.com/512/854/854878.png" alt="Logo" width="30" height="30" class="me-2">
                Curug Cipendok
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('tiket/create') ? 'active' : '' }}" href="{{ route('tiket.create') }}">Pesan Tiket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('tiket/cek-pemesanan') ? 'active' : '' }}" href="{{ route('tiket.cek-pemesanan') }}">Riwayat Pemesanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#kontak">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<body style="background-color: #f0f8ff;">
<div class="container mt-5">
  <div class="card shadow-lg mx-auto" style="max-width: 450px;">
    <div class="card-header text-center bg-primary text-white">
      <h4>Cek Pemesanan Tiket</h4>
    </div>
    <div class="card-body">
      @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
      @endif

      <form action="{{ route('tiket.cek-pemesanan') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label class="form-label">Masukkan Nomor HP</label>
          <input type="text" name="no_hp" class="form-control" placeholder="Contoh: 085312345678" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">🔍 Cek Pemesanan</button>
      </form>
    </div>
  </div>
</div>
</body>
</html>
