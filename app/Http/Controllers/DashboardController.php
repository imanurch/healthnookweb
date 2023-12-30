<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Product;
use \App\Models\User;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard',[
            "products" => Product::all(),
            "all_product" => Product::count('id_product'),
            "active_product" => Product::where('stok', '!=', 0) -> count('id_product'),
            "all_user" => User::count('id_user'),
            "active_user" => User::where('status', 1) -> count('id_user')
        ]);
        
    }
}
