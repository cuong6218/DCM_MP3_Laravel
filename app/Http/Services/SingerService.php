<?php


namespace App\Http\Services;


use App\Http\Repositories\SingerRepository;
use App\Models\Singer;
use Illuminate\Support\Facades\Storage;
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
    function destroy($id)
    {
        $this->singerRepo->destroy($id);
    }
    function show($id)
    {
        return $this->singerRepo->show($id);
    }
    function update($request, $id)
    {
        $singer = $this->singerRepo->show($id);
        $data = $request->all();
        //update image
        if ($request->hasFile('image')) {
            // delete current image
            $currentImg = $singer->image;
            if ($currentImg) {
                Storage::delete('/public/' . $currentImg);
            }
            //update new image
            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $data['image'] = $path;
        }
        $singer->fill($data);
        $this->singerRepo->save($singer);
    }
}
