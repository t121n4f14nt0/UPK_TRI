<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('main.navbar');
    }

    public function dashboard()
    {
        return view('dashboard');
    }
    
    public function login()
    {
        return view('login');
    }

    public function masuk(Request $request)
    {
        $masuk = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($masuk)){
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->with('eror', 'login gagal!');
    }

    public function keluar()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/login');
    }
}
