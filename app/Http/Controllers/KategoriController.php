<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Attribute;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $kategoris = Kategori::all();
        return view('kategori.index', compact('kategoris'));
    }

    public function create()
    {
        return view('kategori.create');
    }

    public function store(Request $request)
    {
        $file = $request->file(key:'foto');
        $name = $file->getClientOriginalName();
        $path = 'nama_kategori/foto/jenis/';
        $file->move( $path, $name);
        $foto = $name;

        $kategori = Kategori::create([
            'id' => $request->id,
            'nama' => $request->nama,
            'jenis' => $request->jenis,
            'foto' => $foto
        ]);

        if($kategori){
            return redirect()->route('kategori.index')->with( 'succes',  'kategori telah di tambahkan');
        }
        else{
            return redirect()->route('kategori.index')->with( 'error',  'kategori gagal di tambahkan');
        }

    }

    public function show(string $id)
    {
        $kategori = Kategori::findOrfail($id);
        return view('kategori.show', compact('kategori'));
    }

    public function edit(Kategori $kategori)
    {
        return view('kategori.edit', compact('kategori'));
    }

    public function update(Request $request, Kategori $kategori)
    {
        $request->validate(['nama' => 'required']);
        $kategori->update($request->all());
        return redirect()->route('kategori.index');
    }

    public function destroy(Kategori $kategori)
    {
        $kategori->delete();
        return redirect()->route('kategori.index');
    }
}
