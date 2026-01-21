<?php

namespace App\Http\Controllers;

use App\Services\DashboardStatsService;
use App\Models\Contact;
use Carbon\Carbon;

class SalesRepDashboardController extends Controller
{
    public function index(DashboardStatsService $stats)
    {
        $common = $stats->commonStats();

        $newContactsThisWeek = $stats->newContactsThisWeek();

        $thisYear = (int) now()->year;
        $lastYear = $thisYear - 1;

        $contactsThisYear = $stats->contactsAddedByMonth($thisYear);
        $contactsLastYear = $stats->contactsAddedByMonth($lastYear);

        $clientTypeRows = Contact::query()
            ->selectRaw('LOWER(client_type) as client_type, COUNT(*) as total')
            ->whereNotNull('client_type')
            ->groupBy('client_type')
            ->get();

        $clientTypeData = $clientTypeRows->pluck('total', 'client_type')->toArray();

        $startThisWeek = now()->startOfWeek();
        $endThisWeek = now()->endOfWeek();

        $startLastWeek = now()->subWeek()->startOfWeek();
        $endLastWeek = now()->subWeek()->endOfWeek();

        $thisWeekCount = Contact::whereBetween('created_at', [$startThisWeek, $endThisWeek])->count();
        $lastWeekCount = Contact::whereBetween('created_at', [$startLastWeek, $endLastWeek])->count();

        $percentChange = $lastWeekCount > 0
            ? (($thisWeekCount - $lastWeekCount) / $lastWeekCount) * 100
            : ($thisWeekCount > 0 ? 100 : 0);

        $newThisWeek = Contact::whereBetween('created_at', [$startThisWeek, $endThisWeek])->count();
        $newLastWeek = Contact::whereBetween('created_at', [$startLastWeek, $endLastWeek])->count();

        $newDelta = $newThisWeek - $newLastWeek;
        $newDeltaLabel = $newDelta >= 0 ? "+{$newDelta}" : (string) $newDelta;

        $activeThisWeek = Contact::where('is_active', 'active')
            ->whereBetween('updated_at', [$startThisWeek, $endThisWeek])
            ->count();

        $activeLastWeek = Contact::where('is_active', 'active')
            ->whereBetween('updated_at', [$startLastWeek, $endLastWeek])
            ->count();

        $activePercent = $activeLastWeek > 0
            ? (($activeThisWeek - $activeLastWeek) / $activeLastWeek) * 100
            : ($activeThisWeek > 0 ? 100 : 0);


        return view('sales-rep.sales-rep-dashboard', array_merge(
            $common,
            compact(
                'newContactsThisWeek',
                'thisYear',
                'lastYear',
                'contactsThisYear',
                'contactsLastYear',
                'clientTypeData',
                'percentChange',
                'thisWeekCount',
                'lastWeekCount',
                'newContactsThisWeek',
                'newDeltaLabel',
                'activePercent'
            )
        ));
    }
}