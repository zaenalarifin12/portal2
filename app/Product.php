<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;

class Product extends Model
{
    use Uuid;
    
    protected $guarded = [];



    // ================= query
    public function scopeFindUidByOne($query, $uid)
    {
        return $query->where("uuid", $uid)->firstOrFail();
    }

    public function getRouteKeyName()
    {
        return 'uuid';
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
