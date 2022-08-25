<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $data = Produk::all();
        return view('produk.index', compact('data'));
    }

    public function create()
    {
        return view('produk.create');
    }
    public function store(Request $request)
    {
        $data = Produk::create($request->all());
        if ($request->hasFile('gambar')) {
            $request->file('gambar')->move('fotoproduk/', $request->file('gambar')->getClientOriginalName());
            $data->gambar = $request->file('gambar')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('produk.index', compact('data'));
    }

    public function edit($id)
    {
        $data = Produk::find($id);
        return view('produk.update', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Produk::find($id);
        $data->update($request->all());
        if ($request->hasFile('gambar')) {
            $request->file('gambar')->move('fotoproduk/', $request->file('gambar')->getClientOriginalName());
            $data->gambar = $request->file('gambar')->getClientOriginalName();
            $data->update();
        }
        return redirect()->route('produk.index');
    }

    public function destroy($id)
    {
        $data = Produk::find($id);
        $data->delete();
        return redirect()->route('produk.index');
    }
}
