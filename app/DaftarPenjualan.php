<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DaftarPenjualan extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function laku()
    {
        return $this->hasMany(HasilPenjualanLaku::class);
    }

    public function tidak_laku()
    {
        return $this->hasMany(HasilPenjualanTidakLaku::class);
    }
}
