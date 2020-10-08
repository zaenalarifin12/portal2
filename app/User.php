<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Traits\Uuid;

class User extends Authenticatable
{
    use Notifiable;
    use Uuid;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
    // protected $fillable = [
    //     'uuid', 
    //     'nama', 
    //     'password', 
    //     "no_handphone", 
    //     "role",
    //     "nik",
    //     "alamat",
    //     "kecamatan",
    //     "kabupaten",
    // ];

    

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    // public function scopeIsPetani($query)
    // {
    //     return $query->where("role", 0);
    // }

    public function scopeIsAdmin()
    {
        return ($this->role == 1) ? true : false;
    }

    public function scopePetani($query)
    {
        return $this->query("role", 1);
    }

    public function transaksis()
    {
        return $this->hasMany(Transaksi::class);
    }

    public function sales()
    {
        return $this->hasMany(Sale::class);
    }

    public function daftar_penjualans()
    {
        return $this->hasMany(DaftarPenjualan::class);
    }
}

