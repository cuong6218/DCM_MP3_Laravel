<?php


namespace App\Http\Services;


use App\Http\Repositories\PlaylistReposiroty;
use App\Models\Playlist;

class PlaylistService
{
    protected $playlistRepo;
    public function __construct(PlaylistReposiroty $playlistRepo)
    {
        $this->playlistRepo = $playlistRepo;
    }
    function getAll(){
        return $this->playlistRepo->getAll();
    }
    function getDesc(){
        return $this->playlistRepo->getDesc();
    }
    function store($request){
        $playlist = new Playlist();
        $playlist->playlist_name = $request->playlist_name;
        $this->playlistRepo->save($playlist);
        $playlist->songs()->sync($request->song);
    }
    function destroy($id){
        $playlist = $this->playlistRepo->show($id);
        $playlist->songs()->detach();
        $this->playlistRepo->destroy($id);

    }
    function show($id){
        return $this->playlistRepo->show($id);
    }
    function addSong($request, $id){
        $playlist = $this->playlistRepo->show($id);
        $playlist->songs()->sync($request->song);
    }
    function deleteSong($playlist_id, $song_id){
        $playlist = $this->playlistRepo->show($playlist_id);
        $playlist->songs()->detach($song_id);
    }
}
