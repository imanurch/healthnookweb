<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Product;
use \App\Models\Jenisproduct;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        return view('product', [
            "products" => Product::paginate(7),
        ]);
    }

    public function add()
    {
        $lastid = Product::all()->last() ? Product::all()->last()->id_product + 1 : 1;
        return view('addproduct', [
            "kategori" => Jenisproduct::orderBy('nama_kategori', 'asc')->get(),
            "currentid" => $lastid
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
        $validatedData = $request->validate([
            'nama_product' => 'required',
            'harga' => 'required|integer',
            'stok' => 'required|gte:1',
            'id_kategori' => 'required',
        ]);

        if ($request->file('foto_product')) {
            $validatedData['foto_product'] = $request->file('foto_product')->store('product-img');
        }

        Product::create($validatedData);
        return redirect('product');
    }

    public function update(Request $request,)
    {
        // @dd($request);
        $validatedData = $request->validate([
            'nama_product' => 'required',
            'harga' => 'required|integer',
            'stok' => 'required',
            'id_kategori' => 'required',
            // 'foto_product' => 'required',
        ]);

        // @dd($request->foto_product);

        $validateDel = Product::find($request->id_product);
        if ($request->file('foto_product')) {
            if ($validateDel->foto_product) {
                Storage::delete($validateDel->foto_product);
            }
            $validatedData['foto_product'] = $request->file('foto_product')->store('product-img');
        }

        (Product::where('id_product', $request->id_product)->update($validatedData));
        // @dd(Product::where('id_product', $request->id_product)->get());

        return redirect('/product');
    }

    public function delete(Request $request)
    {
        $data = Product::find($request->id_product);
        if ($data->foto_product) {
            Storage::delete($data->foto_product);
        }
        Product::where('id_product', $request->id_product)->delete();
        return redirect('/product');
    }
}
