<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//panggil Model
use App\Pegawai;

class PegawaiController extends Controller
{
  public function index()
  {
        //mengambil data Pegawai
        // $pegawai = Pegawai::all();
        // menampilkan 10 data pegawai per halaman
        $pegawai = Pegawai::paginate(10);
        // Mengirim data pegawai ke view pegawai
        return view('pegawai', ['pegawai'=>$pegawai]);
  }
}
