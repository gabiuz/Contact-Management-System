<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $primaryKey = 'contact_id';

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'email',
        'mobile_number',
        'preferred_contact',
        'is_active',
        'client_type',
        'assigned_agent_id',
        'customer_note',
    ];

    public function representative()
    {
        return $this->belongsTo(Representative::class, 'assigned_agent_id', 'representative_id');
    }
}
