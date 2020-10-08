<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            
            'nama' => "admin",
            'no_handphone' => "0000000",
            'password' => Hash::make("12341234"),
            'role' => 1,
            'nik' => "12341234",
            'alamat' => "rembang",
            'kecamatan' => "rembang",
            'kabupaten' => "rembang",
        ]);

        User::create([
            'nama' => "zainal arifin",
            'no_handphone' => "089999999",
            'password' => Hash::make("12341234"),
            'role' => 0,
            'nik' => "121332424343",
            'alamat' => "rembang",
            'kecamatan' => "rembang",
            'kabupaten' => "rembang",
        ]);
        
    }
}
