<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        // Data array mahasiswa sesuai modul
        $data_mahasiswa = [
            ['nama' => 'Nadine', 'alamat' => 'Kediri', 'gender' => 'P'],
            ['nama' => 'Athala', 'alamat' => 'Nganjuk', 'gender' => 'L'],
            ['nama' => 'Dhennys', 'alamat' => 'Malang', 'gender' => 'L'],
            ['nama' => 'Chelsea', 'alamat' => 'Surabaya', 'gender' => 'P'],
        ];

        // Kirim data ke view 'mahasiswa' menggunakan teknik parsing data
        return view('mahasiswa', ['mahasiswa' => $data_mahasiswa]);
    }
}