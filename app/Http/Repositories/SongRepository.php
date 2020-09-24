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
}
