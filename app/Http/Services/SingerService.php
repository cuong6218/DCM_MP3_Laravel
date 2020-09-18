<?php


namespace App\Http\Services;


use App\Http\Repositories\SingerRepository;
use App\Models\Singer;

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
    function store($request)
    {
        $singer = new Singer();
        $data = $request->all();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $data['image'] = $path;
            $singer->fill($data);
            $this->singerRepo->save($singer);
        }
    }
}
