<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;

class ItemTransaksi extends Model
{
    protected $guarded = [];
    use Uuid;
    
    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class);
    }
}
