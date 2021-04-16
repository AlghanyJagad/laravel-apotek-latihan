<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Obat;
use App\Keranjang;

class Transaksi extends Model
{
    protected $table = 'transaksis';
    protected $fillable = ['id_transaksi', 'id_obat', 'jumlah'];

    public function keranjang()
    {
    	return $this->belongsTo(Keranjang::class);
    }

    public function obat()
    {
    	return $this->belongsTo('App\Obat', 'id_obat');
    }
}
