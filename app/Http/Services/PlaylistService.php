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
        $playlist->name = $request->name;
        $this->playlistRepo->save($playlist);
    }
    function destroy($id){
        $this->playlistRepo->destroy($id);
    }

}
