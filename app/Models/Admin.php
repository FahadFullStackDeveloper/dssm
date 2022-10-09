<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Admin extends Authenticatable
{
    use HasFactory;

    protected $guard = "admin";

    protected $fillable = [
        'name',
        'email',
        'password',
        'thumbnail', 
        'phone',
        'displayName',
        'dateOfBirth',
        'addressLine1',
        'addressLine2',
        'state',
        'country'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
