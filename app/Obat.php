<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Transaksi;
use App\Keranjang;

class Obat extends Model
{
    protected $table = 'obats';
    protected $fillable = ['nama_obat', 'khasiat', 'stok'];

    public function keranjang()
    {
    	return $this->hasOne(Keranjang::class);
    }

    public function transaksi()
    {
    	return $this->hasMany('App\Transaksi');
    }
}
