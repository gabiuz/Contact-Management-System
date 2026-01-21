<?php

namespace App\Services;

use App\Models\Contact;
use App\Models\Representative;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DashboardStatsService
{
    public function commonStats(): array
    {
        $totalContacts = Contact::count();
        $totalSalesRep = Representative::count();
        $activeClients = Contact::where('is_active', 'active')->count();

        // Preferred contact counts (fixed keys)
        $preferredKeys = ['email', 'call', 'whatsapp', 'viber', 'sms'];

        $preferredCounts = Contact::query()
            ->selectRaw('LOWER(preferred_contact) as preferred_contact, COUNT(*) as total')
            ->whereNotNull('preferred_contact')
            ->whereIn(DB::raw('LOWER(preferred_contact)'), $preferredKeys)
            ->groupByRaw('LOWER(preferred_contact)')
            ->pluck('total', 'preferred_contact')
            ->toArray();

        $preferredContactData = [];
        foreach ($preferredKeys as $k) {
            $preferredContactData[$k] = (int)($preferredCounts[$k] ?? 0);
        }

        return compact(
            'totalContacts',
            'totalSalesRep',
            'activeClients',
            'preferredContactData'
        );
    }

    /**
     * Monthly contacts added for a year (Jan..Dec)
     */
    public function contactsAddedByMonth(int $year): array
    {
        $rows = Contact::query()
            ->selectRaw('MONTH(created_at) as m, COUNT(*) as total')
            ->whereYear('created_at', $year)
            ->groupByRaw('MONTH(created_at)')
            ->orderByRaw('MONTH(created_at)')
            ->get();

        $data = array_fill(1, 12, 0);
        foreach ($rows as $r) {
            $data[(int)$r->m] = (int)$r->total;
        }

        return array_values($data); // 12 numbers
    }

    public function newContactsThisWeek(): int
    {
        return Contact::whereBetween('created_at', [
            Carbon::now()->startOfWeek(),
            Carbon::now()->endOfWeek(),
        ])->count();
    }
}
