<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;

class Transaksi extends Model
{
    use Uuid;
    
    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'uuid';
    }

    static function scopeByAuth($query)
    {
        if(auth()->user()->role == 1)
            return $query;
        else    
            return $query->where("user_id", auth()->user()->id);
    }

    protected $with = [
        "itemTransaksis", "user"
    ];

    // ======= relasi
    public function itemTransaksis()
    {
        return $this->hasMany(ItemTransaksi::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
