<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Customer extends Authenticatable
{
    use Notifiable;
    protected $table = 'customers';
    protected $guard = "admins";

    protected $fillable = [
        'firstName', 'lastName', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

}
