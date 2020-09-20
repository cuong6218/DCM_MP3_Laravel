<?php

namespace App\Http\Controllers;

use App\Http\Requests\MusicRequest;
use App\Models\Music;
use App\Models\Singer;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    function indexMusicUser()
    {
        $singers = Singer::all();
        return view('template.demo.upload',compact('singers'));
    }

    function storeAddMusics(MusicRequest $request)
    {
        $music = new Music();
        $music->music_name = $request->music_name;

        if ($request->hasFile('audio')) {
            $audio = $request->file('audio');

            $path1 = $audio->store('audios', 'public');
            $music->audio = $path1;
        }

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $music->image = $path;
        }

        $music->singer = $request->singer;
        $music->views = '1';
        $music->status = 'pending';
        $music->save();

        return redirect()->route('profile.list');

    }

    function indexListUpload(){
        return view('template.demo.list-upload');
    }
}
