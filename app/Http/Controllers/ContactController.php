<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
        return view('sales-rep.create-contact');
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
