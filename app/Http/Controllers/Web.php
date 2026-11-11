<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
//import Controller
use App\Http\Controllers\Web;
class Web extends Controller {
public function home() {
return "<h1>Ini adalah Controllers Web</h1>";
}
public function profil($nama) {
return "<h2>Laman Profil ".$nama."</h2>";
}

public function biodata() {
$data['nama'] = 'Nadine Safwabilla';
$data['alamat'] = 'Kediri';
return view('biodata',$data);
}
}