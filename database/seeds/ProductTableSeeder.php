<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::insert([
            ["uuid" => "pd1", "gambar"=> "xxxx", "nama" => "Benih",             "harga" => 10000],
            ["uuid" => "pd2", "gambar"=> "xxxx", "nama" => "Saprogdi",          "harga" => 10000],
            ["uuid" => "pd3", "gambar"=> "xxxx", "nama" => "Pupuk ZK",          "harga" => 10000],
            ["uuid" => "pd4", "gambar"=> "xxxx", "nama" => "Pupuk ZA",          "harga" => 10000],
            ["uuid" => "pd5", "gambar"=> "xxxx", "nama" => "Pupuk KNO3",        "harga" => 10000],
            ["uuid" => "pd6", "gambar"=> "xxxx", "nama" => "Pupuk NPK",         "harga" => 10000],
            ["uuid" => "pd7", "gambar"=> "xxxx", "nama" => "Pupuk UREA",        "harga" => 10000],
            ["uuid" => "pd8", "gambar"=> "xxxx", "nama" => "Pestisida infinto", "harga" => 10000],
            ["uuid" => "pd8", "gambar"=> "xxxx", "nama" => "Pestisida ammate",  "harga" => 10000],
            ["uuid" => "pd9", "gambar"=> "xxxx", "nama" => "Pestisida movento", "harga" => 10000],
            ["uuid" => "pd10","gambar"=> "xxxx",  "nama" => "Pestisida TOBAGO",  "harga" => 10000],
            ["uuid" => "pd11","gambar"=> "xxxx",  "nama" => "Kotak obat",        "harga" => 10000],
            ["uuid" => "pd12","gambar"=> "xxxx",  "nama" => "APD",               "harga" => 10000],
            ["uuid" => "pd13","gambar"=> "xxxx",  "nama" => "BARCODE",           "harga" => 10000],
            ["uuid" => "pd14","gambar"=> "xxxx",  "nama" => "Kain formet",       "harga" => 10000],
            ["uuid" => "pd15","gambar"=> "xxxx",  "nama" => "Karung yute/goni",  "harga" => 10000],
        ]);
    }
}
