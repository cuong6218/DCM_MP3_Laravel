<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;
    protected $table = 'albums';
    protected $fillable = ['album_name','image'];

    function songs(){
        return $this->hasMany(Song::class,'albums_id');
    }
//    function singers(){
//        return $this->hasManyThrough('App\Models\Singer', 'App\Models\Song');
//    }
}
