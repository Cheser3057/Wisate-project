<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Pemesanan Tiket Wisata</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
            line-height: 20px;
            font-size: 15px;
        }

        .layar-dalam {
            width: 1000px;
            margin: auto;
        }

        .layar-penuh {
            width: 100%
        }
    </style>
</head>

<body style="background-color: #f8f9fa;">


    <div class="container mt-5 mb-5">
        <div class="card shadow-lg">
            <div class="card-header bg-primary text-white text-center">
                <h4>Form Pemesanan Tiket </h4>
            </div>

            <div class="card-body">
                <form action="{{ route('tiket.store') }}" method="POST">
                    @csrf

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Masukkan nama Anda" required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Masukkan email Anda" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Nomor HP (WhatsApp)</label>
                            <input type="text" name="no_hp" class="form-control" placeholder="Contoh: 08123456789" required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Tanggal Kunjungan</label>
                            <input type="date" name="tanggal_kunjungan" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Jumlah Tiket</label>
                            <input type="number" name="jumlah_tiket" class="form-control" min="1" value="1" required>
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

                        <div class="col-md-6 mt-3">
                            <label class="form-label">Nomor Rekening / E-Wallet</label>
                            <input type="text" id="norek" class="form-control" readonly placeholder="Nomor rekening akan muncul di sini">
                        </div>

                        <script>
                            const select = document.getElementById('metode_pembayaran');
                            const norekInput = document.getElementById('norek');

                            select.addEventListener('change', function() {
                                const value = this.value;
                                let norek = '';

                                switch (value) {
                                    case 'BCA':
                                        norek = '1234567890 (Faiz   BCA)';
                                        break;
                                    case 'BNI':
                                        norek = '9876543210 (Faiz   BNI)';
                                        break;
                                    case 'BRI':
                                        norek = '1122334455 (Faiz   BRI)';
                                        break;
                                    case 'Mandiri':
                                        norek = '5566778899 (Faiz   Mandiri)';
                                        break;
                                    case 'Dana':
                                        norek = '081234567890 (Faiz  Dana)';
                                        break;
                                    case 'OVO':
                                        norek = '081298765432 (Faiz  OVO)';
                                        break;
                                    default:
                                        norek = '';
                                }

                                norekInput.value = norek;
                            });
                        </script>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-success px-4">Pesan Sekarang</button>
                    </div>
                </form>
            </div>

            <div class="card-footer text-center text-muted">
                <small>Setelah melakukan pemesanan, silakan kirim bukti pembayaran melalui WhatsApp yang tertera di tiket Anda.</small>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>