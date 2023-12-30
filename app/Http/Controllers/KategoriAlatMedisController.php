<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Product;

class KategoriAlatMedisController extends Controller
{
    public function index()
    {
        return view('index_kategori', [
            'kategori'=> 'Alat Medis',
            'desc'=> 'descnya belum',
            "products" => Product::all()->where("kategori", "Alat Medis"),
        ]);
    }
}
