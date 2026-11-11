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
            ['nama' => 'Athalla', 'alamat' => 'Nganjuk', 'gender' => 'L'],
            ['nama' => 'Inez', 'alamat' => 'Nganjuk', 'gender' => 'P'],
            ['nama' => 'Titania', 'alamat' => 'Malang', 'gender' => 'P'],
            ['nama' => 'Regita', 'alamat' => 'Surabaya', 'gender' => 'P'],
            ['nama' => 'Fensa', 'alamat' => 'Kediri', 'gender' => 'P'],
            ['nama' => 'Devana', 'alamat' => 'Kediri', 'gender' => 'P'],
        ];

        // Kirim data ke view 'mahasiswa' menggunakan teknik parsing data
        return view('mahasiswa', ['mahasiswa' => $data_mahasiswa]);
    }
}