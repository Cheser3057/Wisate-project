<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Pemesanan Tiket Wisata</title>

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


        body {
            background: linear-gradient(135deg, #c9e8ff, #f2f9ff);
            font-family: 'Poppins', sans-serif;
        }

        .ticket-card {
            max-width: 600px;
            margin: 60px auto;
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .ticket-card:hover {
            transform: scale(1.02);
        }

        .ticket-header {
            background: linear-gradient(90deg, #007bff, #00bcd4);
            color: white;
            padding: 25px 15px;
            text-align: center;
        }

        .ticket-header h2 {
            font-weight: 700;
            margin: 0;
            font-size: 1.5rem;
        }

        .ticket-body {
            padding: 25px;
        }

        .ticket-body p {
            font-size: 15px;
            color: #333;
            margin-bottom: 8px;
        }

        .ticket-body strong {
            color: #000;
        }

        .status {
            padding: 6px 10px;
            border-radius: 8px;
            font-weight: 600;
            text-transform: capitalize;
        }

        .status.pending {
            background-color: #fff3cd;
            color: #856404;
        }

        .status.selesai {
            background-color: #d4edda;
            color: #155724;
        }

        .btn-wa {
            background-color: #25D366;
            border: none;
            padding: 12px 20px;
            border-radius: 10px;
            color: white;
            font-weight: 600;
            font-size: 16px;
            transition: 0.3s;
        }

        .btn-wa:hover {
            background-color: #1ebe5d;
        }

        .qris-section {
            background: #f8f9fa;
            border: 2px dashed #007bff;
            border-radius: 10px;
            padding: 15px;
            text-align: center;
            margin-top: 20px;
        }

        .qris-section h5 {
            color: #007bff;
            font-weight: 600;
        }

        .qris-section img {
            width: 220px;
            margin-top: 10px;
            border-radius: 10px;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            color: #6c757d;
            font-size: 14px;
        }
    </style>
</head>

<body>

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


    @foreach ($tiket as $item)
    <div class="ticket-card">
        <div class="ticket-header">
            <h2>Detail Pemesanan Tiket Wisata</h2>
        </div>

        <div class="ticket-body">
            <p><strong>Kode Tiket:</strong> {{ $item->kode_tiket }}</p>
            <p><strong>Nama:</strong> {{ $item->nama }}</p>
            <p><strong>Email:</strong> {{ $item->email }}</p>
            <p><strong>No HP:</strong> {{ $item->no_hp }}</p>
            <p><strong>Jumlah Tiket:</strong> {{ $item->jumlah_tiket }}</p>
            <p><strong>Tanggal Kunjungan:</strong> {{ $item->tanggal_kunjungan }}</p>
            <p><strong>Metode Pembayaran:</strong> {{ $item->metode_pembayaran }}</p>
            <p><strong>Total Harga:</strong>
                <span class="text-primary fw-bold">
                    Rp{{ number_format($item->total_harga, 0, ',', '.') }}
                </span>
            </p>
            <p><strong>Status:</strong>
                <span class="status {{ $item->status == 'pending' ? 'pending' : 'selesai' }}">
                    {{ $item->status }}
                </span>
            </p>

        </div>
    </div>
    @endforeach

    <div class="footer">
        &copy; {{ date('Y') }} Curug Cipendok Ticketing — All Rights Reserved
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>