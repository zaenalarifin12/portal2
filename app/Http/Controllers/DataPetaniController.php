<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class DataPetaniController extends Controller
{
    public function index()
    {
        if(Auth::user()->role == 0){
            return redirect("data-petani/". Auth::user()->id);
        }

        $user = User::latest()->get();

        return view("data-petani.index", compact("user"));
    }

    public function show($id)
    {
        $user = User::findOrFail($id);

        return view("data-petani.show", compact("user"));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view("data-petani.edit", compact("user"));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update([
            "nama_ketua_kelompok"   => $request->nama_ketua_kelompok,
            "tahun_tanam"           => $request->tahun_tanam,
            "jumlah_paket"          => $request->jumlah_paket,
            "nomor_rekening"          => $request->nomor_rekening,
            "rt"          => $request->rt,
            "rw"          => $request->rw,
        ]);

        return redirect("/data-petani")->withSuccess("data petani berhasil diperbarui");
    }
    // TODO reset for admin only
}
