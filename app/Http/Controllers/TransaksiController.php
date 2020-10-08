<?php

namespace App\Http\Controllers;

use App\Transaksi;
use App\ItemTransaksi;
use Illuminate\Http\Request;
use App\Order;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $transaksis = Transaksi::byAuth()->latest()->get();
        
        return view("transaksi.index", compact("transaksis"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Order::byAuth()->count() > 0) {
            // for update jumlah order
            foreach($request->id as $key => $value){
                Order::byAuth()->where("id", $request->id[$key])->update([
                    "jumlah" => $request->jumlah[$key]
                ]);
            }  
            
            // for for insert transaksi => jenis pembayaran 
            $transaksi = Transaksi::create([
                "user_id" => auth()->user()->id
            ]);

            foreach(Order::with("product")->byAuth()->get()  as $order){
                $transaksi->itemTransaksis()->create([
                    "nama"      => $order->product->nama,
                    "gambar"    => $order->product->gambar,
                    "harga"     => $order->product->harga,
                    "jumlah"    => $order->jumlah,
                ]);
            }

            Order::byAuth()->delete();
        }

        return redirect("/transaksi");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(Transaksi $transaksi)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaksi $transaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaksi $transaksi)
    {
        // $transaksi = $transaksi->byAuth()->firstOrFail();

        $imageName = time() . "." . $request->file("gambar")->getClientOriginalExtension();
        
        $request->file("gambar")->storeAs(
            'public/transaksi', $imageName
        );
        $transaksi->update([
            "status"      => 1,
            "gambar"    => $imageName
        ]);

        return redirect("/transaksi")
            ->withSuccess("anda berhasil mengirim struk; terima kasih");
        // $transaksi->->firstOrFail();
    }

    public function ubah_status_pengiriman(Transaksi $transaksi)
    {
        $transaksi->update([
            "status_pengiriman"      => 1,
        ]);

        return redirect("/transaksi")
            ->withSuccess("barang sudah terkirim; terima kasih");
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaksi $transaksi)
    {
        //
    }
}
