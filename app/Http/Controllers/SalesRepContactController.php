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
                $q->where('first_name', 'like', "%$s%")
                    ->orWhere('middle_name', 'like', "%$s%")
                    ->orWhere('last_name', 'like', "%$s%")
                    ->orWhere('email', 'like', "%$s%")
                    ->orWhere('mobile_number', 'like', "%$s%");
            });
        }

        $contacts = $query->paginate(10);

        return view('sales-rep.sales-rep-contacts', compact('contacts'));
    }
}
