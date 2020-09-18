<?php


namespace App\Http\Services;


use App\Http\Repositories\SingerRepository;

class SingerService
{
    protected $singerRepo;
    function __construct(SingerRepository $singerRepo)
    {
        $this->singerRepo = $singerRepo;
    }
    function getDesc()
    {
        return $this->singerRepo->getDesc();
    }
    function getAll()
    {
        return $this->singerRepo->getAll();
    }

}
