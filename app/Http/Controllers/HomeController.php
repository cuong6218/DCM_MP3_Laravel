<?php

namespace App\Http\Controllers;

use App\Models\Singer;
use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //


    function index2(){
        $songs = Song::all();

        $albums =  DB::table('albums')->select('*')->orderBy('id','desc')->paginate(4);

        $singers = DB::table('singers')->select('*')->orderBy('id', 'desc')->paginate(2);

        return view('template.demo.index',compact('songs','albums','singers'));
    }

    function showListAlbums(){
        $albums =  DB::table('albums')->select('*')->orderBy('id','desc')->get();

        return view('template.demo.list-album',compact('albums'));
    }

    function showListSinger(){
        $singers = DB::table('singers')->select('*')->orderBy('id', 'desc')->get();
        return view('template.demo.list-singer',compact('singers'));
    }

}
