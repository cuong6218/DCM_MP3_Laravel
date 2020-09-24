<?php

namespace App\Http\Controllers;

use App\Http\Services\PlaylistService;
use App\Http\Services\SongService;
use Illuminate\Http\Request;

class PlaylistController extends Controller
{
    protected $playlistService;
    protected $songService;
    public function __construct(PlaylistService $playlistService,
                                SongService $songService){
        $this->playlistService = $playlistService;
        $this->songService = $songService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $playlists = $this->playlistService->getDesc();
        $songs = $this->songService->getAll();
        return view('template.demo.playlist-list', compact('playlists', 'songs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('template.demo.playlist-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->playlistService->store($request);
        return redirect()->route('playlist.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $playlist = $this->playlistService->show($id);
        $songs = $this->songService->getAll();
        return view('template.demo.playlist-add', compact('playlist', 'songs'));
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
