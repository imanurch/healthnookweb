<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Product;

class IndexController extends Controller
{
    public function index()
    {
        return view('index', [
            "kategori" => "Semua",
            "products" => Product::all(),
            "masker" => Product::all()->where("kategori", "Masker"),
            "obat_dalam" => Product::all()->where("kategori", "Obat Dalam"),
            "alat_medis" => Product::all()->where("kategori", "Alat Medis"),
            "obat_luar" => Product::all()->where("kategori", "Obat Luar"),
        ]);
    }
}
