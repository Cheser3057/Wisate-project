<?php

namespace App\Http\Controllers;

use App\Models\tiket;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class TiketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tiket = tiket::latest()->get();
        return view('tiket.index', compact('tiket'));
    }


    public function pemesanan($id)
    {
        $tiket = tiket::findOrFail($id);
        return view('tiket.pemesanan', compact('tiket'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tiket.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'email' => 'required|email',
            'no_hp' => 'required|string|max:20',
            'jumlah_tiket' => 'required|integer|min:1',
            'tanggal_kunjungan' => 'required|date',
            'metode_pembayaran' => 'required',
        ]);

        $harga_tiket = 15000;
        $total = $request->jumlah_tiket * $harga_tiket;
        $kode_tiket = 'TIKET-' . date('Ymd') . '-' . strtoupper(Str::random(5));

        $tiket = tiket::create([
            'kode_tiket' => $kode_tiket,
            'nama' => $request->nama,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'jumlah_tiket' => $request->jumlah_tiket,
            'tanggal_kunjungan' => $request->tanggal_kunjungan,
            'metode_pembayaran' => $request->metode_pembayaran,
            'total_harga' => $total,
            'status' => 'pending',
        ]);


        return redirect()->route('tiket.pemesanan', ['id' => $tiket->id])
            ->with('success', 'Pemesanan Tiket Berhasil');
    }


    public function updateStatus($id)
    {
        $tiket = tiket::findOrFail($id);

        if ($tiket->status == 'pending' || $tiket->status == 'diproses') {
            $tiket->status = 'selesai';
            $tiket->save();
            return redirect()->back()->with('info', 'Tiket sudah di bayar');
        }
    }


    public function cekForm()
    {
        return view('tiket.cek-pemesanan');
    }

    public function cekPemesanan(Request $request)
    {
        $request->validate([
            'no_hp' => 'required',
        ]);

        // cari tiket berdasarkan no hp
$tiket = \App\Models\Tiket::where('no_hp', $request->no_hp)->get();

        if ($tiket->isEmpty()) {
            return back()->with('error', 'Nomor HP belum pernah melakukan pemesanan.');
        }

        return view('tiket.detail', compact('tiket'));
    }


    /**
     * Display the specified resource.
     */
    public function show(tiket $tiket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tiket $tiket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tiket $tiket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tiket $tiket)
    {
        //
    }
}
