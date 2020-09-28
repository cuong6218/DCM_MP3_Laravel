<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $table = 'tags';

    function song(){
        return $this->belongsToMany(Song::class,'songtags','tag_id','song_id');
    }
}
