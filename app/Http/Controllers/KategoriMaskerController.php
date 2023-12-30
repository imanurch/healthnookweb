<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Product;

class KategoriMaskerController extends Controller
{
    public function index()
    {
        return view('index_kategori', [
            'kategori'=> 'Masker',
            'desc'=> 'Perlindungan pertamamu',
            "products" => Product::all()->where("kategori", "Masker"),
        ]);
    }
}
