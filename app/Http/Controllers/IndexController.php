<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Product;

class IndexController extends Controller
{
    public function index()
    {
        return view('index', [
            "products" => Product::all(),
            "masker" => Product::with('jenisproduct')->where("id_kategori", "1")->get(),
            "obat_dalam" => Product::with('jenisproduct')->where("id_kategori", "2")->get(),
            "alat_medis" => Product::with('jenisproduct')->where("id_kategori", "3")->get(),
            "obat_luar" => Product::with('jenisproduct')->where("id_kategori", "4")->get(),
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
