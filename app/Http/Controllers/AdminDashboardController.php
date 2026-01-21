<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Representative;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $totalContacts = Contact::count();

        $totalSalesReps = Representative::count();

        $activeClients = Contact::where('is_active', 'active')->count();

        $topRep = Representative::withCount('contacts')
            ->orderByDesc('contacts_count')
            ->first();

        $mostActiveRep = Representative::withCount([
            'contacts as active_contacts_count' => fn($q) => $q->where('is_active', 'active')
        ])
            ->orderByDesc('active_contacts_count')
            ->first();

        $clientsPerRep = Representative::query()
            ->select('representative_id', 'first_name', 'last_name')
            ->withCount('contacts')
            ->orderByDesc('contacts_count')
            ->get()
            ->map(function ($rep) {
                $hue = ($rep->representative_id * 137) % 360;
                $rep->chart_color = "hsl($hue, 70%, 55%)";
                return $rep;
            });

        return view('admin.admin-dashboard', compact(
            'totalContacts',
            'totalSalesReps',
            'activeClients',
            'topRep',
            'mostActiveRep',
            'clientsPerRep'
        ));
    }
    function repColor(int $id): string
    {
        $hue = ($id * 137) % 360;
        return "hsl($hue, 70%, 55%)";
    }
}
