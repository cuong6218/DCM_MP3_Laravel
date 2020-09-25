<?php


namespace App\Http\Repositories;


use App\Models\Playlist;

class PlaylistReposiroty
{
    protected $playlist;
    public function __construct(Playlist $playlist)
    {
        $this->playlist = $playlist;
    }

    function getAll(){
        return Playlist::all();
    }
    function getDesc(){
        return $this->playlist->select('*')->orderBy('id', 'desc')->get();
    }
    function save($playlist){
        $playlist->save();
    }
    function destroy($id){
        $this->playlist->destroy($id);
    }
    function show($id){
        return $this->playlist->findOrFail($id);
    }
}
