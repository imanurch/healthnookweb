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
            $customer = User::where('status', '1')->where('role', 'customer')->first() ? 1 : 0;
            // @dd($customer);

            if ($customer == '1') {
                // @dd('verif succes');
                $request->session()->regenerate();
                return redirect('/');
                // $login ='1';
                // return redirect()->route('/',['id'=>1]);
                // return redirect()->action(
                //     [IndexController::class, 'index'], ['login' => 1]
                // );
            } else {
                // @dd('verif gagal');
                return redirect('/verifikasi');
            }
        }
    }
}
