<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function index()
    {
        $songs = Song::all();
        return view('template.index', compact('songs'));
    }

    function indexAlbums()
    {
        return view('template.album');
    }

    function index2(){
        $songs = Song::all();
        return view('template.demo.index',compact('songs'));
    }
}
