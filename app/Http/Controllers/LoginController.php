<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('login.index', [
            'title' => 'Login'
        ]);
    }

    public function Login(Request $request)
    {
        $cek = $request->validate([
            'email' => 'email|required',
            'password' => 'required'
        ]);

        if (Auth::attempt($cek)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }


        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

}