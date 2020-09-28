<?php


namespace App\Http\Repositories;


use App\Models\Song;
use Illuminate\Support\Facades\DB;

class SongRepository
{
    protected $song;
    public function __construct(Song $song){
        $this->song = $song;
    }
    function getAll(){
        return Song::all();
    }
    function getTrash(){
        return Song::withTrashed()->orderBy('id', 'desc')->get();
    }
    function sortDelete($id){
        $song = Song::findOrFail($id);
        $song->delete();
    }
    function show($id){
        return $this->song->findOrFail($id);
    }
}
