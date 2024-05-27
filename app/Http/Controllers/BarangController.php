<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    public function checkAvailability(Request $request)
    {
        // Validasi input tanggal
        $request->validate([
            'pinjam_date' => 'required|date',
            'pengembalian_date' => 'required|date|after_or_equal:pinjam_date',
        ]);

        $pinjamDate = $request->input('pinjam_date');
        $pengembalianDate = $request->input('pengembalian_date');

        // Panggil prosedur tersimpan untuk mengecek ketersediaan barang
        $results = DB::select('CALL CheckAvailability(?, ?)', [$pinjamDate, $pengembalianDate]);

        // Kembalikan hasil ke tampilan
        return view('informasi', ['results' => $results]);
    }
}
