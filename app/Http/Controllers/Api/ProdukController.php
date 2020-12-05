<?php

namespace App\Http\Controllers\Api;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProdukController extends Controller
{
    public function show($id)
    {
        $produk = Product::where("id", $id)->first();

        return response()->json($produk);
    }
}
