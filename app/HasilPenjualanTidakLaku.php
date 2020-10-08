<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HasilPenjualanTidakLaku extends Model
{
    protected $guarded =  [];

    public function daftar_penjualan()
    {
        return $this->belongsTo(DaftarPenjualan::class);
    }

}
