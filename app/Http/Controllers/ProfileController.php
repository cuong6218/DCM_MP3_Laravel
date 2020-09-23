<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\MusicRequest;
use App\Http\Requests\UserRequest;
use App\Models\Music;
use App\Models\Singer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    //
    function indexMusicUser()
    {
        $singers = Singer::all();
        return view('template.demo.upload', compact('singers'));
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
        $music->user_id = $request->user_id;
        $music->desc = $request->desc;
        $music->save();

        toastr()->success('Upload Success', 'Success!');
        return redirect()->route('profile.upload');

    }

    function indexListUpload()
    {
        return view('template.demo.list-upload');
    }

    function showPending($id)
    {

        $musics = DB::table('musics')->select('*')->where('user_id', $id)->get();

        return view('template.demo.list-upload', compact('musics'));

    }

    function showProfile()
    {
        return view('template.demo.profile');
    }

    function updateUser(UserRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->save();
        toastr()->success('Upload Success', 'Success!');
        return back();
    }

    function showChangePassword()
    {
        return view('template.demo.changePassword');
    }

    function postChangePassword(ChangePasswordRequest $request)
    {
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            toastr()->error('Old password is incorrect', 'Error!');
            return redirect()->back();
        }

        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            toastr()->error('The new password is the same as the old one', 'Error!');
            return redirect()->back();
        }

        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();
        toastr()->success('Change Password Success', 'Success!');
        return redirect()->back();

    }
}
