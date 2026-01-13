<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Representative extends Authenticatable
{
    protected $table = 'representative';
    protected $primaryKey = 'representative_id';

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'email',
        'pass',
    ];

    protected $hidden = [
        'pass',
        'remember_token',
    ];

    public function getAuthPassword()
    {
        return $this->pass;
    }
}
