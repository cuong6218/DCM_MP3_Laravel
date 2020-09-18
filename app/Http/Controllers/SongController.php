<?php

namespace App\Http\Controllers;

use App\Http\Requests\SongRequest;
use App\Models\Album;
use App\Models\Category;
use App\Models\Singer;
use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $songs = DB::table('songs')->select('*')->orderBy('id','desc')->get();
        return view('admin.songs.list',compact('songs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $albums = Album::all();
        $categorys = Category::all();
        $singers = Singer::all();
        return view('admin.songs.create',compact('albums','categorys','singers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SongRequest $request)
    {
        //
        $song = new Song();
        $song->song_name = $request->song_name;

        if($request->hasFile('audio')){
            $audio = $request->file('audio');

            $path1 = $audio->store('audios','public');
            $song->audio = $path1;
        }

        if($request->hasFile('image')){
            $image = $request->file('image');
            $path = $image->store('images','public');
            $song->image = $path;
        }

        $song->author = $request->author;
        $song->views = '1';
        $song->singer_id = $request->singer_id;
        $song->album_id = $request->album_id;
        $song->category_id = $request->category_id;
        $song->save();
        return redirect()->route('songs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $shows =  DB::table('singers')
            ->join('songs','singers.id','songs.singer_id')
            ->join('albums','songs.album_id','albums.id')


            ->select('singers.*','songs.*','albums.album_name')
            ->where('songs.id','=',"$id")
            ->get();

        return view('template.detail',compact('shows'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
