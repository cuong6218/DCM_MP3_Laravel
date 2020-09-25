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

}
