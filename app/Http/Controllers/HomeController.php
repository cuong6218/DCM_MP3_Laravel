<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //


    function index2(){
        $songs = Song::all();

        $albums =  DB::table('albums')->select('*')->paginate(4);



        return view('template.demo.index',compact('songs','albums'));
    }

}
