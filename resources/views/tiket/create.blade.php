<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Pemesanan Tiket Wisata</title>

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

        * {
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: linear-gradient(135deg, #c9e8ff, #f2f9ff);
            min-height: 100vh;
            padding: 20px;
        }

        .card {
            border-radius: 15px;
            overflow: hidden;
        }

        .card-header {
            background: linear-gradient(90deg, #007bff, #00bcd4);
        }

        .btn-success {
            background-color: #28a745;
            border: none;
            transition: all 0.3s ease;
        }

        .btn-success:hover {
            background-color: #1e7e34;
            transform: scale(1.05);
        }

        .form-label {
            font-weight: 600;
        }

        .total-box {
            background: #e9f7ef;
            border-radius: 10px;
            padding: 10px;
            text-align: center;
            font-size: 18px;
            font-weight: bold;
            color: #155724;
            margin-top: 10px;
        }

        .card-footer {
            background-color: #f8f9fa;
        }

        @media (max-width: 768px) {
            .card {
                margin: 15px;
            }
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

    <div class="container mt-5 mb-5">
        <div class="card shadow-lg">
            <div class="card-header text-white text-center py-3">
                <h4>Pemesanan Tiket Wisata</h4>
            </div>

            <div class="card-body p-4">
                <form action="{{ route('tiket.store') }}" method="POST" id="formTiket">
                    @csrf

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Nomor HP (WhatsApp)</label>
                            <input type="text" name="no_hp" class="form-control" required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Tanggal Kunjungan</label>
                            <input type="date" name="tanggal_kunjungan" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Jumlah Tiket</label>
                            <input type="number" id="jumlah_tiket" name="jumlah_tiket" class="form-control" min="0" value="0" required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Metode Pembayaran</label>
                            <select name="metode_pembayaran" id="metode_pembayaran" class="form-select" required>
                                <option value="">-- Pilih Metode Pembayaran --</option>
                                <option value="BCA">Transfer Bank BCA</option>
                                <option value="BNI">Transfer Bank BNI</option>
                                <option value="BRI">Transfer Bank BRI</option>
                                <option value="Mandiri">Transfer Bank Mandiri</option>
                                <option value="Dana">Dana</option>
                                <option value="OVO">OVO</option>
                            </select>
                        </div>

                        <div class="total-box">
                            Total Harga: <span id="total_harga">Rp0</span>
                        </div>

                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-success px-5 py-2">Pesan Sekarang</button>
                        </div>
                </form>
            </div>

            <div class="card-footer text-center text-muted">
                <small>Setelah melakukan pemesanan, silakan kirim bukti pembayaran melalui WhatsApp yang tertera di tiket Anda.</small>
            </div>
        </div>
    </div>

    <script>
        const select = document.getElementById('metode_pembayaran');
        const norekInput = document.getElementById('norek');
        const jumlahTiketInput = document.getElementById('jumlah_tiket');
        const totalHargaElement = document.getElementById('total_harga');
        const hargaPerTiket = 15000;


        jumlahTiketInput.addEventListener('input', function() {
            const jumlah = parseInt(this.value) || 0;
            const total = jumlah * hargaPerTiket;
            totalHargaElement.textContent = `Rp${total.toLocaleString('id-ID')}`;
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>