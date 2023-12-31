<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;
use App\Models\User;

class DaftarController extends Controller
{
    public function index()
    {
        return view('daftar');
    }

    public function insert(Request $request)
    {
        $validatedData = $request->validate([
            'nama_user' => 'required',
            'no_telp' => 'required|unique:users|min:12|max:12',
            'email' => 'required|unique:users|email:dns',
            'password' => 'required|min:8|max:12',
        ]);
        User::create($validatedData);
        return view('verifikasi');
    }
}
