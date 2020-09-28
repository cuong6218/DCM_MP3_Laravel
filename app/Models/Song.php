<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Song extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates = ['delete_at'];
    function playlists(){
        return $this->belongsToMany(Playlist::class, 'playlist_song', 'song_id', 'playlist_id');
    }
    function singer(){
        return $this->belongsTo(Singer::class, 'singer_id');
    }

    function albums(){
        return $this->belongsToMany(Album::class, 'album_id');


    function tags(){
        return $this->belongsToMany(Tag::class,'songtags','song_id','tag_id');

    }
}
