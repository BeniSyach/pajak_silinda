<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user); // login secara resmi ke Laravel Auth
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors(['email' => 'Login gagal. Cek kembali email dan password.']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
