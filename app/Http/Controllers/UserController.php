<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return view('user', [
            "users" => User::all(),
        ]);
    }

    public function add()
    {
        return view('manageuser', [
            "title" => "Tambah",
            "save" => "Simpan",
            // "lastid" => User::all()->last()->id_user,
            "currentid" => (User::all()->last()->id_user)+1
        ]);
    }

    public function edit()
    {
        return view('manageuser', [
            "title" => "Edit",
            "save" => "Simpan Perubahan",
            // "users" => User::all()
        ]);
    }
}
