<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class SalesRepContactController extends Controller
{
    public function index(Request $request)
    {
        $query = Contact::with('representative')->latest();

        if ($request->filled('search')) {
            $s = $request->search;
            $query->where(function ($q) use ($s) {
                $q->where('first_name', 'like', "%{$s}%")
                  ->orWhere('middle_name', 'like', "%{$s}%")
                  ->orWhere('last_name', 'like', "%{$s}%")
                  ->orWhere('email', 'like', "%{$s}%")
                  ->orWhere('mobile_number', 'like', "%{$s}%");
            });
        }

        // keep search query when paging
        $contacts = $query->paginate(10)->withQueryString();

        return view('sales-rep.sales-rep-contacts', compact('contacts'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'middle_name' => ['nullable', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],

            'email' => ['nullable', 'email', 'max:255'],
            'mobile_number' => ['nullable', 'string', 'max:50'],

            'preferred_contact' => ['nullable', 'string', 'max:50'],
            'client_type' => ['nullable', 'string', 'max:50'],

            'assigned_agent_id' => ['nullable', 'integer', 'exists:representative,representative_id'],
            'customer_note' => ['nullable', 'string'],
        ]);

        Contact::create($data);

        return redirect()
            ->route('sales-rep-contacts')
            ->with('success', 'Contact added successfully!');
    }
}
