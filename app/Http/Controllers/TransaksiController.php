<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\View\View;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index() : View
    {
        // Mengambil semua transaksi dengan join ke tabel produk dan supplier melalui produk
        $transaksi = new Transaksi;
        $transaksis = $transaksi->get_transaksi()
                                ->latest()
                                ->paginate(10);

        // Menampilkan view dengan data transaksi
        return view('transaksi.index', compact('transaksis'));
    }
}
