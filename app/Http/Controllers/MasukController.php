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
            $verif = User::where('status', '1')->where('role', 'customer')->first() ? 1 : 0;
            // @dd($verif);

            if ($verif == '1') {
                // @dd('verif succes');
                $request->session()->regenerate();
                return redirect('/');
            } else {
                // @dd('verif gagal');
                return redirect('/verifikasi');
            }
        }

        return back()->with('loginError', 'Masuk Akun Gagal');
    }
}
