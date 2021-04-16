<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Obat;
use App\Keranjang;
use App\Transaksi;

class HomeController extends Controller
{
    public function index()
    {
        $keranjang = Keranjang::get();
        $obat   = Obat::get();

        $datas = Transaksi::get();
        return view('welcome', compact('keranjang', 'obat', 'datas'));
    }
}
