<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produks = Produk::all();
        return view('produk.index', compact('produks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required',
            'jenis' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $fileName = time().'.'.$request->foto->extension();

        $request->foto->move(public_path('images'),$fileName);

        produk::create([
            'nama_produk' => $request->nama_produk,
            'jenis' => $request->jenis,
            'foto' =>$fileName
        ]);

        return redirect()->route('produk.index')->with('Success','Produk berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $produk = Produk::findOrfail($id);
        return view('produk.show', compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produk = Produk::findOrFail($id);
        return view('produk.edit', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $produk = Produk::findOrFail($id);
        $request->validate([
            'nama_produk' => 'required',
            'jenis' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        if ($request->hasFile('foto')) {
            $fileName = time(). '.' .$request->foto->extension();
            $request->foto->move(public_path('images'), $fileName);
            $produk->foto = $fileName;
        }

        $produk->update([
            'nama_produk' => $request->nama_produk,
            'jenis' => $request->jenis,
            'foto' => $produk->foto
        ]);

        return redirect()->route('produk.index')->with('Success','produk berhasil di ubah');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $produk = Produk::findOrFail($id);
        $produk->delete();

        return redirect()->route('produk.index')->with('success','Produk Berhasil dihapus');
    }
}
