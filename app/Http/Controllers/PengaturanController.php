<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class PengaturanController extends Controller
{

    public function show()
    {
        $auth = Auth::id();
        $user = User::findOrFail($auth);

        return view("pengaturan.show", compact("user"));
    }    

    public function edit()
    {
        $auth = Auth::id();
        $user = User::findOrFail($auth);

        return view("pengaturan.edit", compact("user"));
    }    

    public function update(Request $request)
    {
        $auth = Auth::id();
        $user = User::findOrFail($auth);

        $user->update([
            "nama" => $request->nama,
            "no_handphone" => $request->no_handphone,
            "nik" => $request->nik,
            "alamat" => $request->alamat,
            "kecamatan" => $request->kecamatan,
            "kabupaten" => $request->kabupaten,

        ]);

        return redirect("/pengaturan")->withSuccess("akun anda berhasil diperbarui");
    }
}
