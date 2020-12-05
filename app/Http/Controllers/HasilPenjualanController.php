<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Greate;
use App\DaftarPenjualan;
use App\HasilPenjualanLaku;
use App\HasilPenjualanTidakLaku;

class HasilPenjualanController extends Controller
{
    public function index()
    {

        if (Auth::user()->role == 1) {
            $daftar_penjualan = DaftarPenjualan::has("laku")->with("laku", "laku.greate")->get();
        }else{
            $daftar_penjualan = DaftarPenjualan::has("laku")->with("laku", "laku.greate")
                            ->where("user_id", Auth::user()->id)->get();
        }

        return view("hasil-penjualan.index", compact("daftar_penjualan"));
    }

    public function create($id)
    {
        $greate = Greate::get();
        $daftar = DaftarPenjualan::with("user")->findOrFail($id);

        return view("hasil-penjualan.create", compact([ "greate", "daftar"]));
    }

    public function store(Request $request, $id)
    {
        $greate = Greate::get();
        $daftar = DaftarPenjualan::with("user")->findOrFail($id);

        // isi jumlah yang laku
        for ($i=0; $i < count($request->greate); $i++) { 
            HasilPenjualanLaku::create([
                "bal_laku"              => $request->bal[$i], 
                "bobot_laku"            => $request->bobot[$i], 
                "harga"                 => $request->harga[$i], 
                "greate_id"              => $request->greate[$i], 
                "daftar_penjualan_id"   => $daftar->id, 
            ]);
        }

        if($request->bobot_tidak_laku != null){
            HasilPenjualanLaku::create([
                "bobot_tidak_laku"  => $request->bobot_tidak_laku,
                "alasan"            => $request->alasan,
            ]);
        }


        
        return redirect("/hasil-penjualan")->withSuccess("hasil penjualan berhasil diproses");
    }

    public function changeStatus($id)
    {
        $daftar = DaftarPenjualan::findOrFail($id);
        $daftar->update([
            "status"    => 1
        ]);

        return back()->withSuccess("pengiriman uang sudah lunas");
    }
}
