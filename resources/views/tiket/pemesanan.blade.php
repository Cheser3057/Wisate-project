<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Pemesanan Tiket Wisata</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
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

        .footer {
            text-align: center;
            margin-top: 20px;
            color: #6c757d;
            font-size: 14px;
        }
    </style>
</head>

<body>

    <div class="ticket-card">
        <div class="ticket-header">
            <h2>Detail Pemesanan Tiket Wisata</h2>
        </div>

        <div class="ticket-body">
            <p><strong>Kode Tiket:</strong> {{ $tiket->kode_tiket }}</p>
            <p><strong>Nama:</strong> {{ $tiket->nama }}</p>
            <p><strong>Email:</strong> {{ $tiket->email }}</p>
            <p><strong>No HP:</strong> {{ $tiket->no_hp }}</p>
            <p><strong>Jumlah Tiket:</strong> {{ $tiket->jumlah_tiket }}</p>
            <p><strong>Tanggal Kunjungan:</strong> {{ $tiket->tanggal_kunjungan }}</p>
            <p><strong>Metode Pembayaran:</strong> {{ $tiket->metode_pembayaran }}</p>
            <p><strong>Total Harga:</strong> <span class="text-primary fw-bold">Rp{{ number_format($tiket->total_harga, 0, ',', '.') }}</span></p>
            <p><strong>Status:</strong>
                <span class="status {{ $tiket->status == 'pending' ? 'pending' : 'selesai' }}">
                    {{ $tiket->status }}
                </span>
            </p>

            <div class="text-center mt-4">
                @php
                $pesanWA = urlencode("Halo, saya ingin konfirmasi pembayaran tiket, Atas nama $tiket->nama dengan kode $tiket->kode_tiket.");
                @endphp
                <a href="https://wa.me/62895384471300?text={{ $pesanWA }}"
                    target="_blank"
                    class="btn-wa"> 
                    💬 Konfirmasi via WhatsApp
                </a>
            </div>
        </div>

        <div class="footer">
            &copy; {{ date('Y') }} Curug Cipendok Ticketing — All Rights Reserved
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>