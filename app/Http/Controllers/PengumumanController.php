<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengumuman;

class PengumumanController extends Controller
{
    public function index()
    {
        $pengumuman = Pengumuman::latest()->get();

        return view("pengumuman.index", compact("pengumuman"));
    }

    public function create()
    {
        return view("pengumuman.create");
    }

    public function store(Request $request)
    {
        Pengumuman::create([
            "body"  => $request->body
        ]);

        return redirect("/pengumuman")->withSuccess("pengumuman berhasil dibuat");
    }

    public function edit($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);

        return view("pengumuman.edit", compact("pengumuman"));
    }

    public function update(Request $request, $id)
    {
        // TODO VALIDASI
        $pengumuman = Pengumuman::findOrFail($id);

        $pengumuman->update([
            "body"  => $request->body
        ]);

        return redirect("/pengumuman")->withSuccess("pengumuman berhasil diperbarui");;
    }

    public function destroy($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);
        $pengumuman->delete();

        return redirect("/pengumuman")->withSuccess("pengumuman berhasil dihapus");; 
    }

}
