<?php

use Illuminate\Database\Seeder;
use App\Greate;

class GreateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Greate::insert([
            ["nama" => "F3", "harga" => 10000],
            ["nama" => "F2", "harga" => 20000],
            ["nama" => "F1", "harga" => 30000],
            ["nama" => "P3", "harga" => 40000],
            ["nama" => "P2", "harga" => 50000],
            ["nama" => "P1", "harga" => 60000],
            ["nama" => "S3", "harga" => 70000],
            ["nama" => "S2", "harga" => 90000],
            ["nama" => "S1", "harga" => 100000],
        ]);
    }
}
