<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function index(){
        return view('template.index');
    }

    function indexAlbums(){
        return view('template.album');
    }
}
