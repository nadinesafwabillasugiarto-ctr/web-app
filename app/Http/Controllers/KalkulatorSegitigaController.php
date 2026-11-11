<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorSegitigaController extends Controller
{
    // Menampilkan halaman awal (kosong atau nilai default)
    public function form()
    {
        return view('kalkulator');
    }

    // Memproses data yang diketik user dari form
    public function hitung(Request $request)
    {
        // Mengambil nilai inputan user
        $alas = $request->input('alas');
        $tinggi = $request->input('tinggi');

        // Menghitung luas segitiga
        $luas = 0.5 * $alas * $tinggi;

        // Kirim kembali nilai alas, tinggi, dan hasil luas ke view
        return view('kalkulator', compact('alas', 'tinggi', 'luas'));
    }
}