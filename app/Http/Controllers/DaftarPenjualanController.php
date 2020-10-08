<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\DaftarPenjualan;

class DaftarPenjualanController extends Controller
{
    public function index()
    {
        if(Auth::user()->role == 0){
            $daftar_penjualan = DaftarPenjualan::where("user_id", Auth::user()->id)->latest()->get();
        }else{
            $daftar_penjualan = DaftarPenjualan::latest()->get();
        }   

        return view("daftar-penjualan.index", compact("daftar_penjualan"));
    }

    public function create()
    {
        $user = User::findOrFail(Auth::user()->id);

        return view("daftar-penjualan.create", compact("user"));
    }

    public function store(Request $request)
    {
        DaftarPenjualan::create([
            "jumlah_bal"    => $request->jumlah_bal, 
            "pembayaran"    => $request->pembayaran,
            "user_id"       => Auth::user()->id,
        ]);
        // TODO
        // jika daftar penjualan sudah ada maka tidak boleh membuat kembali

        return redirect("daftar-penjualan")->withSuccess("anda berhasil menjual barang anda");
    }

    public function destroy($id)
    {
        $x =  DaftarPenjualan::where("user_id", Auth::user()->id)->where("id", $id)->firstOrFail();
        $x->delete();

        return redirect("daftar-penjualan")->withSuccess("anda berhasil menghapus barang penjualan anda");
    }
}
