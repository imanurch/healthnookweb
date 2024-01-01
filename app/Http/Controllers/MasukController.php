<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class MasukController extends Controller
{
    public function index()
    {
        return view('masuk');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);
        // dd('success');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended()->with('success', 'Login Success');
        } else {
            return back()->with('error', 'Login Failed');
        }
    }

    // public function logout (Request $request){
    //     Auth::logout();
    //     return redirect('/');
    // }
}
