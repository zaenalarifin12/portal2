<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HasilPenjualanLaku extends Model
{
    protected $guarded =  [];

    public function daftar_penjualan()
    {
        return $this->belongsTo(DaftarPenjualan::class);
    }

    public function greate()
    {
        return $this->belongsTo(Greate::class);
    }

}
