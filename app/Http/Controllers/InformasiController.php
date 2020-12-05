<?php

namespace App\Http\Controllers;

use App\Pengumuman;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InformasiController extends Controller
{
    public function index()
    {
        $pengumuman = Pengumuman::latest()->get();
        
        return view('informasi', compact("pengumuman"));
    }
}
