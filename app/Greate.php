<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Greate extends Model
{
    protected $guarded = [];

    public function laku()
    {
        return $this->hasMany(HasilPenjualanLaku::class);
    }
}
