<?php

namespace App\Models;

use App\Http\Middleware\checkLogin;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Customer extends Model
{
    use HasFactory;
    protected $table = 'customers';
    protected $fillable = ['firstName','email','password', 'lastName'];
    protected $hidden = ['password', 'remember_token'];
    protected $casts = ['email_verified_at' => 'datetime'];
}
