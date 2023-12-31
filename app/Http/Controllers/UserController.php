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
            "id" => (User::all()->last()->id_user)
        ]);
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
        return view('user', [
            "users" => User::all(),
        ]);
        // @dd("success");
    }

    public function destroy(User $id_user){
        // $data = User::find($id_user);
        // $data->delete();
        User::destroy($id_user);
        return redirect('user', [
            "users" => User::all(),
        ])->with('success', 'Data user berhasil dihapus!');
    }
}
