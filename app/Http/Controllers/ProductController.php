<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Product;
use \App\Models\Jenisproduct;

class ProductController extends Controller
{
    public function index()
    {
        return view('product', [
            "products" => Product::all()
        ]);
    }

    public function add()
    {
        return view('addproduct', [
            "kategori" => Jenisproduct::orderBy('nama_kategori', 'asc')->get(),
            // "lastid" => Product::all()->last()->id_product,
            "currentid" => (Product::all()->last()->id_product) + 1
        ]);
    }

    public function edit($id)
    {
        return view('editproduct', [
            'product' => Product::with('jenisproduct')->where('id_product', $id)->first(),
            "kategori" => Jenisproduct::orderBy('nama_kategori', 'asc')->get(),
        ]);
    }

    public function insert(Request $request)
    {
        $request['foto_product'] = '1';
        $validatedData = $request->validate([
            'nama_product' => 'required',
            'harga' => 'required|integer',
            'stok' => 'required',
            'id_kategori' => 'required',
            'foto_product' => 'required',
        ]);
        Product::create($validatedData);
        return view('product', [
            "products" => Product::all()
        ]);
    }

    public function update(Request $request)
    {
        // @dd($request);
        $validatedData = $request->validate([
            'nama_product' => 'required',
            'harga' => 'required|integer',
            'stok' => 'required',
            'id_kategori' => 'required',
            // 'foto_product' => 'required',
        ]);

        (Product::where('id_product', $request->id_product)->update($validatedData));
        // @dd(Product::where('id_product', $request->id_product)->get());

        return redirect('/product');
    }
}
