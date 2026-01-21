<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Representative;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'first_name' => ['required','string','max:255'],
            'middle_name' => ['nullable','string','max:255'],
            'last_name' => ['required','string','max:255'],
            'email' => ['required','email','max:255'],
            'password' => ['required','min:6'],
            'role' => ['required','in:admin,sales-rep'],
        ]);

        $model = $data['role'] === 'admin' ? Admin::class : Representative::class;

        if ($model::where('email', $data['email'])->exists()) {
            return back()->withErrors(['email' => 'Email already registered for this role.'])->withInput();
        }

        $model::create([
            'first_name' => $data['first_name'],
            'middle_name' => $data['middle_name'] ?? null,
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'pass' => Hash::make($data['password']),
        ]);

        return redirect()->route('login')->with('success', 'Registered successfully! Please log in.');
    }
}
