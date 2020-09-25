<?php


namespace App\Http\Services;


use App\Http\Repositories\SongRepository;

class SongService
{
    protected $songRepo;
    public function __construct(SongRepository $songRepo){
        $this->songRepo = $songRepo;
    }
    function getAll(){
        return $this->songRepo->getAll();
    }
    function getTrash(){
        return $this->songRepo->getTrash();
    }
    function sortDelete($id){
        $this->songRepo->sortDelete($id);
    }
    function addSong($request, $id){
        $song = $this->songRepo->show($id);
        $song->playlists()->sync($request->playlist_id);
    }
    function show($id){
        return $this->songRepo->show($id);
    }
}
