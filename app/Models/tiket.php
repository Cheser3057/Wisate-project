<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tiket extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode_tiket',
        'nama',
        'email',
        'no_hp',
        'jumlah_tiket',
        'tanggal_kunjungan',
        'metode_pembayaran',
        'total_harga',
        'bukti_pembayaran',
        'status',
    ];
}
