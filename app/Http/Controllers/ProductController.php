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
        return view('manageproduct', [
            "title" => "Tambah",
            "save" => "Simpan",
            "kategori" => Jenisproduct::orderBy('nama_kategori', 'asc')->get(),
            // "lastid" => Product::all()->last()->id_product,
            "currentid" => (Product::all()->last()->id_product)+1
        ]);
    }

    public function edit()
    {
        return view('manageproduct', [
            "title" => "Edit",
            "save" => "Simpan Perubahan",
        ]);
    }
}
