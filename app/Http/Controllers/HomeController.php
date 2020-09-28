<?php

namespace App\Http\Controllers;

use App\Models\Singer;
use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    function index2()
    {
        $songs = Song::all();

        $albums = DB::table('albums')->select('*')->orderBy('id', 'desc')->simplePaginate(4);
//        $albums = DB::select('SELECT singers.singer_name as singer_name, albums.* FROM albums INNER JOIN songs ON albums.id = songs.album_id INNER JOIN singers on songs.singer_id = singers.id ');
        $singers = DB::table('singers')->select('*')->orderBy('id', 'desc')->paginate(2);

        $listSongs = DB::table('songs')->orderBy('views', 'desc')->get();
//        $testSongs = DB::table('songs')->orderBy('views', 'desc')->paginate(20);

        $customerMusic = DB::table('musics')->where('status', '=', 'approved')->orderBy('id', 'desc')->get();

        $singerAll = Singer::all();

        $showListLike = DB::select('SELECT likes.song_id, songs.*, count(likes.song_id) as luot_like FROM likes INNER JOIN songs ON likes.song_id = songs.id GROUP BY likes.song_id, songs.song_name, songs.audio ORDER BY luot_like desc');

        return view('template.demo.index', compact('songs', 'albums', 'singers', 'listSongs', 'customerMusic', 'singerAll','showListLike', ));

    }


    function showListAlbums()
    {
        $albums = DB::table('albums')->select('*')->orderBy('id', 'desc')->get();

        return view('template.demo.list-album', compact('albums'));
    }

    function showListSinger()
    {
        $singers = DB::table('singers')->select('*')->orderBy('id', 'desc')->get();
        $singerView = DB::select('SELECT singers.*, COUNT(songs.views) AS luot_nghe FROM singers INNER JOIN songs ON singers.id = songs.singer_id GROUP BY songs.singer_id');
        return view('template.demo.list-singer', compact('singers', 'singerView'));
    }

    function showListSong()
    {
        $songs = DB::table('songs')->select('*')->orderBy('id', 'desc')->get();
        return view('template.demo.list-song', compact('songs'));
    }



}
