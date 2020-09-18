<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Singer extends Model
{
    use HasFactory;
    protected $fillable = [
        'singer_name', 'image', 'description',
    ];

    function songs(){
        return $this->hasMany(Song::class,'singer_id');
    }
}
