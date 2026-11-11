<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

// Home (/home)
public function home() {
    return view('olshop'); // Memanggil file olshop.blade.php
}
    // Product (/product)
    public function product() {
        return view('product');
    }

    // Detail Produk dengan parameter harga (/produk/detail/{harga})
    public function detail($harga) {
        return view('detail', ['harga' => $harga]);
    }

    // About (/about)
    public function about() {
        return view('about');
    }
}