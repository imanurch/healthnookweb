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
        $lastid = User::all()->last() ? User::all()->last()->id_user + 1 : 1;
        return view('adduser', [
            'currentid' => $lastid
        ]);
    }

    public function edit($id)
    {
        return view('edituser', [
            "user" => User::where('id_user', $id)->get()->first(),
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
        return redirect('/user');
        // @dd("success");
    }

    public function update(Request $request)
    {
        // @dd($request);
        $validatedData = $request->validate([
            'nama_user' => 'required',
            'no_telp' => 'required|unique:users|min:12|max:12',
            'email' => 'required|unique:users|email:dns',
            'password' => 'required|min:8|max:12',
        ]);

        (User::where('id_user', $request->id_user)->update($validatedData));
        // @dd(Product::where('id_product', $request->id_product)->get());

        return redirect('/user');
    }
    public function verif(Request $request)
    {
        $request['status'] = '1';
        $validatedData = $request->validate([
            'status' => 'required',
        ]);

        (User::where('id_user', $request->id_user)->update($validatedData));

        return redirect('/user');
    }

    public function delete(Request $request)
    {
        @dd($request->id_user);
        // User::where('id_user', $request->id_user)->delete();
        // return redirect('/user');
    }
}
