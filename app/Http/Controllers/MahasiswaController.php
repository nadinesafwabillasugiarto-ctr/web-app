<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        // Data array mahasiswa sesuai modul
        $data_mahasiswa = [
            ['nama' => 'Anton', 'alamat' => 'Surabaya', 'gender' => 'L'],
            ['nama' => 'Budi', 'alamat' => 'Kediri', 'gender' => 'L'],
            ['nama' => 'Ani', 'alamat' => 'Malang', 'gender' => 'P'],
            ['nama' => 'Sinta', 'alamat' => 'Surabaya', 'gender' => 'P'],
        ];

        // Kirim data ke view 'mahasiswa' menggunakan teknik parsing data
        return view('mahasiswa', ['mahasiswa' => $data_mahasiswa]);
    }
}