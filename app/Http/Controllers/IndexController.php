<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Product;
// use \App\Models\User;

class IndexController extends Controller
{
    public function index()
    {
        return view('index', [
            "products" => Product::where("stok",">","0")->limit(5)->get(),
            "masker" => Product::with('jenisproduct')->where("id_kategori", "1")->where("stok",">","0")->limit(5)->get(),
            "obat_dalam" => Product::with('jenisproduct')->where("id_kategori", "2")->where("stok",">","0")->limit(5)->get(),
            "alat_medis" => Product::with('jenisproduct')->where("id_kategori", "3")->where("stok",">","0")->limit(5)->get(),
            "obat_luar" => Product::with('jenisproduct')->where("id_kategori", "4")->where("stok",">","0")->limit(5)->get(),
        ]);
    }

    public function masker()
    {
        return view('index_kategori', [
            "products" => Product::with('jenisproduct')->where("id_kategori", "1")->get()
        ]);
    }

    public function obat_dalam()
    {
        return view('index_kategori', [
            "products" => Product::with('jenisproduct')->where("id_kategori", "2")->get()
        ]);
    }

    public function alat_medis()
    {
        return view('index_kategori', [
            "products" => Product::with('jenisproduct')->where("id_kategori", "3")->get()
        ]);
    }

    public function obat_luar()
    {
        return view('index_kategori', [
            "products" => Product::with('jenisproduct')->where("id_kategori", "4")->get()
        ]);
    }
}
