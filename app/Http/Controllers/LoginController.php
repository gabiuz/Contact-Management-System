<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Representative;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function show()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'role' => ['required', 'in:admin,sales-rep'],
            'first_name' => ['required', 'string', 'max:255'],
            'middle_name' => ['nullable', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if ($data['role'] === 'admin') {
            $guard = 'admin';

            $user = Admin::where('email', $data['email'])
                ->where('first_name', $data['first_name'])
                ->where(function ($q) use ($data) {
                    if ($data['middle_name'] === null || $data['middle_name'] === '') {
                        $q->whereNull('middle_name')->orWhere('middle_name', '');
                    } else {
                        $q->where('middle_name', $data['middle_name']);
                    }
                })
                ->where('last_name', $data['last_name'])
                ->first();
        } else {
            $guard = 'representative';

            $user = Representative::where('email', $data['email'])
                ->where('first_name', $data['first_name'])
                ->where(function ($q) use ($data) {
                    if ($data['middle_name'] === null || $data['middle_name'] === '') {
                        $q->whereNull('middle_name')->orWhere('middle_name', '');
                    } else {
                        $q->where('middle_name', $data['middle_name']);
                    }
                })
                ->where('last_name', $data['last_name'])
                ->first();
        }

        if (!$user || !Hash::check($data['password'], $user->pass)) {
            return back()->withErrors([
                'email' => 'Invalid credentials.',
            ])->onlyInput('email');
        }

        Auth::guard($guard)->login($user);
        $request->session()->regenerate();

        return redirect()->route($guard === 'admin' ? 'admin-dashboard' : 'sales-rep-dashboard');
    }

    public function logout(Request $request)
    {
        if (Auth::guard('admin')->check()) {
            Auth::guard('admin')->logout();
        }
        if (Auth::guard('representative')->check()) {
            Auth::guard('representative')->logout();
        }

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
