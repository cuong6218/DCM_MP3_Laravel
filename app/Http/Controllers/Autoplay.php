<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Autoplay extends Controller
{
    //
    function autoplaySinger($id){
        $playListSinger = DB::table('singers')
            ->join('songs', 'singers.id', 'songs.singer_id')
            ->join('albums', 'songs.album_id', 'albums.id')
            ->select( 'songs.*', 'albums.album_name','singers.*')
            ->where('singers.id', '=', "$id")
            ->orderBy('songs.id','asc')
            ->get();

        return view('template.autoplay-singer', compact('playListSinger'));
    }

    function autoplayPlaylist($id){
        $playlists = DB::table('singers')
            ->join('songs','singers.id','songs.singer_id')
            ->join('playlist_song','songs.id','playlist_song.song_id')
            ->join('playlists','playlist_song.playlist_id','playlists.id')
            ->distinct('playlists.*','songs.*','playlist_song.*')
            ->where('playlists.id','=',"$id")
            ->get();
       
        return view('template.autoplay-playlist',compact('playlists'));
    }

}
