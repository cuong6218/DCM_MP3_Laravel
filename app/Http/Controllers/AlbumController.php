<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlbumRequest;
use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $albums = DB::table('albums')->orderBy('id','desc')->paginate(5);
        return view('admin.albums.list',compact('albums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.albums.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AlbumRequest $request)
    {
        //
        $album = new Album();
        $album->album_name = $request->album_name;

        if($request->hasFile('image')){
            $image = $request->file('image');
            $path = $image->store('images','public');
            $album->image = $path;
        }
        $album->save();
        return redirect()->route('albums.index');
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
        $albums =  DB::table('singers')
            ->join('songs','singers.id','songs.singer_id')
            ->join('albums','songs.album_id','albums.id')

            ->select('singers.*','albums.*','songs.id','songs.song_name','songs.audio','songs.views')
            ->where('albums.id','=',"$id")
            ->get();

        return view('template.demo.about-us',compact('albums'));
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
        $album = Album::findOrFail($id);
        return view('admin.albums.edit',compact('album'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AlbumRequest $request, $id)
    {
        //
        $album = Album::findOrFail($id);
        $album->album_name = $request->album_name;

        if ($request->hasFile('image')){
            $currentImg = $album->image;
            if($currentImg){
                Storage::delete('/public'.$currentImg);
            }
            $image = $request->file('image');
            $path = $image->store('images','public');
            $album->image = $path;
        }
        $album->save();
        return redirect()->route('albums.index');
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
        $album = Album::findOrFail($id);
        $album->delete();
        return redirect()->route('albums.index');
    }
}
