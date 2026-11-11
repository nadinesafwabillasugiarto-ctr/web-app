<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorSegitigaController extends Controller {
    public function segitiga()
    {
        $alas = 10;
        $tinggi = 8;
        $luas = 0.5 * $alas * $tinggi;

        // Memanggil file view kalkulator.blade.php
        return view('kalkulator', compact('alas', 'tinggi', 'luas'));
    }
}