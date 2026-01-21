<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Representative;
use Carbon\Carbon;

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

        $preferredKeys = ['email', 'call', 'whatsapp', 'viber', 'sms/text'];

        $preferredCounts = Contact::query()
            ->selectRaw('LOWER(preferred_contact) as preferred_contact, COUNT(*) as total')
            ->whereNotNull('preferred_contact')
            ->whereIn(\DB::raw('LOWER(preferred_contact)'), $preferredKeys)
            ->groupByRaw('LOWER(preferred_contact)')
            ->pluck('total', 'preferred_contact')
            ->toArray();

        $preferredContactData = [];
        foreach ($preferredKeys as $k) {
            $preferredContactData[$k] = (int) ($preferredCounts[$k] ?? 0);
        }

        $startThisWeek = now()->startOfWeek();
        $endThisWeek = now()->endOfWeek();

        $startLastWeek = now()->subWeek()->startOfWeek();
        $endLastWeek = now()->subWeek()->endOfWeek();

        $contactsThisWeek = Contact::whereBetween('created_at', [$startThisWeek, $endThisWeek])->count();
        $contactsLastWeek = Contact::whereBetween('created_at', [$startLastWeek, $endLastWeek])->count();

        $contactsPercent = $contactsLastWeek > 0
            ? (($contactsThisWeek - $contactsLastWeek) / $contactsLastWeek) * 100
            : ($contactsThisWeek > 0 ? 100 : 0);

        $salesRepsThisWeek = Representative::whereBetween('created_at', [$startThisWeek, $endThisWeek])->count();
        $salesRepsLastWeek = Representative::whereBetween('created_at', [$startLastWeek, $endLastWeek])->count();

        $salesRepsDelta = $salesRepsThisWeek - $salesRepsLastWeek;
        $salesRepsDeltaLabel = $salesRepsDelta >= 0 ? "+{$salesRepsDelta}" : (string) $salesRepsDelta;

        $activeThisWeek = Contact::where('is_active', 'active')
            ->whereBetween('updated_at', [$startThisWeek, $endThisWeek])
            ->count();

        $activeLastWeek = Contact::where('is_active', 'active')
            ->whereBetween('updated_at', [$startLastWeek, $endLastWeek])
            ->count();

        $activePercent = $activeLastWeek > 0
            ? (($activeThisWeek - $activeLastWeek) / $activeLastWeek) * 100
            : ($activeThisWeek > 0 ? 100 : 0);

        return view('admin.admin-dashboard', compact(
            'totalContacts',
            'totalSalesReps',
            'activeClients',
            'topRep',
            'mostActiveRep',
            'clientsPerRep',
            'preferredContactData',
            'contactsPercent',
            'salesRepsDeltaLabel',
            'activePercent'
        ));
    }
    function repColor(int $id): string
    {
        $hue = ($id * 137) % 360;
        return "hsl($hue, 70%, 55%)";
    }
}
