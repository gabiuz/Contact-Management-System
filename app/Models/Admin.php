<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;


class Admin extends Authenticatable
{
    protected $table = 'admin';
    protected $primaryKey = 'admin_id';

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
