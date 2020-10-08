<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;

class Order extends Model
{
    use Uuid;

    protected $guarded = [];

    static function scopeByAuth($query)
    {
        return $query->where("user_id", auth()->user()->id);
    }

    // relasi user dan product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
