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
        $source = $request->input('source');

        $request->merge([
            'first_name' => $this->normalizeName($request->input('first_name')),
            'middle_name' => $this->normalizeName($request->input('middle_name')),
            'last_name' => $this->normalizeName($request->input('last_name')),
        ]);

        $data = $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'middle_name' => ['nullable', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required', 'min:6'],
            'role' => ['required', 'in:admin,sales-rep'],
        ]);

        $model = $data['role'] === 'admin' ? Admin::class : Representative::class;

        if (Admin::where('email', $data['email'])->exists() || Representative::where('email', $data['email'])->exists()) {
            return back()->withErrors(['email' => 'Email already used.'])->withInput();
        }

        $model::create([
            'first_name' => $data['first_name'],
            'middle_name' => $data['middle_name'] ?? null,
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'pass' => Hash::make($data['password']),
        ]);

        if ($source === 'admin-sales-rep') {
            return redirect()
                ->route('admin-sales-rep')
                ->with('success', 'Sales rep added successfully!');
        }

        return redirect()
            ->route('login')
            ->with('success', 'Registered successfully! Please log in.');
    }
    private function normalizeName(?string $value): ?string
    {
        if ($value === null)
            return null;

        $value = preg_replace('/\s+/', ' ', trim($value));

        if ($value === '')
            return null;

        return \Str::title(\Str::lower($value));
    }
}
