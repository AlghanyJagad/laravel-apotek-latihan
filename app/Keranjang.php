<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Transaksi;
use App\Obat;

class Keranjang extends Model
{
    protected $table = 'keranjangs';
    protected $fillable = ['id_obat', 'jumlah'];

    public function transaksi()
    {
    	return $this->hasOne(Transaksi::class);
    }

    public function obat()
    {
        return $this->belongsTo(Obat::class);
    }
}
