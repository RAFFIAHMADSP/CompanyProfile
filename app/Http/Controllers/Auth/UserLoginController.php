<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserLoginController extends Controller
{
    public function login(){
        return view('admin.login');
    }

    public function submit(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($request->route()->named('user.submit') && $user->role !== 'user') {
                Auth::logout();
                return redirect()->route('user.login')->withErrors(['login_error' => 'Halaman tidak sesuai untuk role Anda.']);
            }elseif ($request->route()->named('admin.submit') && $user->role !== 'admin') {
                Auth::logout();
                return redirect()->route('admin.login')->withErrors(['login_error' => 'Halaman tidak sesuai untuk role Anda.']);
            }

            if ($user->role === 'admin') {
                return redirect()->route('admin.dashboard');
            } elseif ($user->role === 'user') {
                return redirect()->route('home');
            }
        }

        return back()->withErrors(['login_error' => 'Username atau password salah'])->onlyInput('username');
    }
}
