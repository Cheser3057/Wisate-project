<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Pemesanan Tiket Wisata</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background-color: #f8f9fa;">

    <div class="container mt-5 mb-5">
        <div class="card shadow-lg">
            <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">
                <h4 class="mb-0">Daftar Pemesanan Tiket Wisata</h4>
                <a href="{{ route('tiket.create') }}" class="btn btn-light btn-sm">+ Tambah Pemesanan</a>
            </div>

            <div class="card-body">
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                @if ($tiket->isEmpty())
                <p class="text-center text-muted">Belum ada data pemesanan tiket.</p>
                @else
                <div class="table-responsive">
                    <table class="table table-bordered table-striped align-middle">
                        <thead class="table-primary text-center">
                            <tr>
                                <th>No</th>
                                <th>Nama Pemesan</th>
                                <th>No HP / WA</th>
                                <th>Tanggal Kunjungan</th>
                                <th>Jumlah Tiket</th>
                                <th>Metode Pembayaran</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tiket as $index => $item)
                            <tr>
                                <td class="text-center">{{ $index + 1 }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->no_hp }}</td>
                                <td>{{ $item->tanggal_kunjungan }}</td>
                                <td class="text-center">{{ $item->jumlah_tiket }}</td>
                                <td>{{ $item->metode_pembayaran }}</td>
                                <td class="text-center">
                                    @if ($item->status == 'selesai')
                                    <span class="badge bg-success">Selesai</span>
                                    @elseif ($item->status == 'diproses')
                                    <span class="badge bg-warning text-dark">Diproses</span>
                                    @else
                                    <span class="badge bg-secondary">Menunggu</span>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <form action="{{ route('tiket.updateStatus', $item->id) }}" method="POST" onsubmit="return confirm('Ubah status tiket menjadi selesai?')">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-primary btn-sm">Ubah Status</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @endif
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>