<?php

namespace App\Http\Controllers;

use App\Product;
use App\Transaksi;
use App\ItemTransaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PembelianController extends Controller
{
    public function index()
    {
        $product = Product::get();

        return view("pembelian.index", compact("product"));
    }

    public function store(Request $request)
    {
        if(empty($request->produk))
            return back();
        else{
            
            for ($i=0; $i < count($request->produk); $i++) { 
                if($request->jumlah[$i] != null){
                    if ($request->has("gambar")) {

                        $imageName = time() . "." . $request->file("gambar")->getClientOriginalExtension();

                        $request->file("gambar")->storeAs(
                            'public/transaksi', $imageName
                        );

                        $transaksi = Transaksi::create([
                            "status" => 1,
                            "gambar" => $imageName,
                            "status_pengiriman" => 0,
                            "tipe_pembayaran" => 1 ,
                            "user_id" => Auth::user()->id,
                        ]);

                    }else{
                        $transaksi = Transaksi::create([
                            "status" => 1,
                            "gambar" => "xxxx",
                            "status_pengiriman" => 0,
                            "tipe_pembayaran" => 0 ,
                            "user_id" => Auth::user()->id,
                        ]);
                        
                    }
                    
                    $product = Product::where("id", $request->produk[$i])->first();

                   
                    ItemTransaksi::create([
                        "nama"=> $product->nama,
                        "harga"=> $product->harga,
                        "gambar"=> "xxxxx",
                        "jumlah"=>$request->jumlah[$i],
                        "transaksi_id"=>$transaksi->id,
                    ]);   

                    return back()->with("produk berhasil dibeli");
                }
            }
        }
        
    }
}
