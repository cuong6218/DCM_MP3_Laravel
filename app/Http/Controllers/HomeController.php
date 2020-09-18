<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //


    function index2(){
        $songs = Song::all();
        return view('template.demo.index',compact('songs'));
    }
}
