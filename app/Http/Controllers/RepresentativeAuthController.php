<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RepresentativeAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('representative.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'pass' => ['required'],
        ]);

        if (Auth::guard('representative')->attempt([
            'email' => $credentials['email'],
            'password' => $credentials['pass'],
        ])) {
            $request->session()->regenerate();
            return redirect()->intended('/representative/dashboard');
        }

        return back()->withErrors([
            'email' => 'Invalid email or password.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::guard('representative')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/representative/login');
    }
}
