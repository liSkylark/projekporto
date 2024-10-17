<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use App\Models\produk;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function produk()
    {
        $produks = Produk::all();
        $kategoris = Kategori::all();
        return view ('frontend.index', compact('produks','kategoris'));
    }
}
