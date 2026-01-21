<?php

namespace App\Http\Controllers;

use App\Models\Representative;
use Illuminate\Http\Request;

class AdminSalesRepController extends Controller
{
    public function index(Request $request)
    {
        $query = Representative::query()->latest('representative_id');

        if ($request->filled('search')) {
            $s = $request->search;
            $query->where(function ($q) use ($s) {
                $q->where('first_name', 'like', "%{$s}%")
                    ->orWhere('middle_name', 'like', "%{$s}%")
                    ->orWhere('last_name', 'like', "%{$s}%")
                    ->orWhere('email', 'like', "%{$s}%");
            });
        }

        $representatives = $query->paginate(10)->withQueryString();

        return view('admin.admin-sales-rep', compact('representatives'));
    }

    public function update(Request $request, Representative $representative)
    {
        $data = $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'middle_name' => ['nullable', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['nullable', 'email', 'max:255'],
        ]);

        $representative->update($data);

        return redirect()->route('admin-sales-rep')->with('success', 'Updated!');
    }

    public function destroy(Request $request, Representative $representative)
    {
        $representative->delete();

        return redirect()->route('admin-sales-rep')->with('success', 'Representative deleted successfully!');
    }
}