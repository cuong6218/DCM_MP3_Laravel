<?php

namespace App\Http\Controllers;

use App\Http\Services\SingerService;
use Illuminate\Http\Request;
use App\Http\Requests\SingerRequest;
class SingerController extends Controller
{
    protected $singerService;
    function __construct(SingerService $singerService)
    {
        $this->singerService = $singerService;
    }
    public function getAll()
    {
        return $this->singerService->getAll();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $singers = $this->singerService->getDesc();
        return view('admin.singers.list', compact('singers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.singers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SingerRequest $request)
    {
        $this->singerService->store($request);
        return redirect()->route('singers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $singer = $this->singerService->show($id);
        return view('admin.singers.edit', compact('singer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SingerRequest $request, $id)
    {
        $this->singerService->update($request, $id);
        return redirect()->route('singers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->singerService->destroy($id);
        return redirect()->route('singers.index');
    }
}
