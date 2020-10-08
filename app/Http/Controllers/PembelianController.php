<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class PembelianController extends Controller
{
    public function index()
    {
        $product = Product::get();

        return view("pembelian.index", compact("product"));

    }
}
