<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Product;

class KategoriObatLuarController extends Controller
{
    public function index()
    {
        return view('index_kategori', [
            'kategori'=> 'Obat Luar',
            'desc'=> 'descnya belum',
            "products" => Product::all()->where("kategori", "Obat Luar"),
        ]);
    }
}
