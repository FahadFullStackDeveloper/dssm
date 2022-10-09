<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Authenticatable
{
    use HasFactory;

    protected $guard = "teacher";

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
        'country',
        'about',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
