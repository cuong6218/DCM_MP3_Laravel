<?php

namespace App\Http\Controllers;

use App\Http\Services\PlaylistService;
use App\Http\Services\SongService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class   PlaylistController extends Controller
{
    protected $data = [];
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
    public function index($id)
    {
        $playlists = $this->playlistService->getAll($id);
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
        return back();
//        return redirect()->route('playlist.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $playlists = $this->playlistService->show($id);
        $songs2 = $this->songService->getAll();

        $playlist = DB::table('singers')
            ->join('songs','singers.id','songs.singer_id')
            ->join('playlist_song','songs.id','playlist_song.song_id')
            ->join('playlists','playlist_song.playlist_id','playlists.id')
            ->distinct('playlists.*','songs.*','playlist_song.*')
            ->where('playlists.id','=',"$id")
            ->get();

        return view('template.demo.playlist-detail', compact('playlist', 'songs2','playlists'));
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
        $this->playlistService->destroy($id);
        return redirect()->route('playlist.index');
    }
    public function addSong($playlist_id, $song_id){
        $playlist = $this->playlistService->show($playlist_id);
        $playlist->songs()->attach($song_id);
//        $this->playlistService->addSong($request, $id);
        return back();
    }
    public function deleteSong($playlist_id, $song_id){
        $this->playlistService->deleteSong($playlist_id, $song_id);
        return back();
    }

}
