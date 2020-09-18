<?php


namespace App\Http\Repositories;


use App\Models\Singer;

class SingerRepository
{
    protected $singer;
    public function __construct(Singer $singer)
    {
        $this->singer = $singer;
    }

    function getDesc()
    {
        return $this->singer->select('*')->orderBy('id', 'desc')->paginate(5);
    }
    function getAll()
    {
        return $this->singer->all();
    }
    function save($singer)
    {
        $singer->save();
    }
    function destroy($id)
    {
        $this->singer->destroy($id);
    }
}
