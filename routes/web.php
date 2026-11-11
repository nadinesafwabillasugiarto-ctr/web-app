<?php

use Illuminate\Support\Facades\Route;

// import controller web dan taruh di routes dengan nama 
//import Controller
use App\Http\Controllers\Web;
use App\Http\Controllers\DashboardController;
//import Controller Kalkulator
use App\Http\Controllers\KalkulatorController;

Route::get('/', function () {
    return view('welcome');
    return "Hallo namaku adalah Nadine, Salam Kenal";
});

//route baru
Route::get('/laman_about', function () {
//return view('welcome');
return "<h2>Ini adalah laman About</h2>";
});

//route ke controller Web ke fungsi home
Route::get('/web',[Web::class, 'home']);

//route ke controller Web ke fungsi profil
Route::get('/profil/{nama}',[Web::class, 'profil']);

// route ke controller DashboardController
Route::get('/home', [DashboardController::class, 'home']);
Route::get('/product', [DashboardController::class, 'product']);
Route::get('/produk/detail/{harga}', [DashboardController::class, 'detail']);
Route::get('/about', [DashboardController::class, 'about']);

//route untuk membuka view biodata
//route untuk membuka Controller web fungsi biodata
Route::get('/biodata',[Web::class, 'biodata']);

//route ke controller kalkulator
Route::get('/kalkulator',[KalkulatorController::class, 'home']);
//route untuk proses perhitungan
Route::post('/kalkulator/proses',[KalkulatorController::class, 'proses']);

// route untuk menampilkan daftar mahasiswa
use App\Http\Controllers\MahasiswaController;

Route::get('/daftar/mahasiswa', [MahasiswaController::class, 'index']);

// route untuk menampilkan kalkulator segitiga
use App\Http\Controllers\KalkulatorSegitigaController;

// Route untuk menampilkan halaman kalkulator
Route::get('/kalkulator/segitiga', [KalkulatorSegitigaController::class, 'form']);

// Route untuk memproses hasil perhitungan form
Route::post('/kalkulator/segitiga', [KalkulatorSegitigaController::class, 'hitung']);