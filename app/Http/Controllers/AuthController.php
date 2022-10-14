<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{

    public function index()
    {
        return view('welcome');
    }

    public function login(Request $request)
    {
        $inputan = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);


        $role = DB::table('users')->where('email', $inputan['email'])->value('level');

        if ($role == 'admin') {
            if (Auth::attempt($inputan)) {
                $request->session()->regenerate();
                return redirect()->intended('/dashboard');
            }

            return back()->with('errorLogin', 'Login Gagal !');
        }  else {
            if (Auth::attempt($inputan)) {
                $request->session()->regenerate();
                return redirect()->intended('/');
            }

            return back()->with('errorLogin', 'Login Gagal !');
        }

        return back()->with('errorLogin', 'Login Gagal !');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
