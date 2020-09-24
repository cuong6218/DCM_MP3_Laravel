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
}
