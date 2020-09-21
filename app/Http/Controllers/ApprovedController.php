<?php

namespace App\Http\Controllers;

use App\Models\Music;
use App\Models\Singer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApprovedController extends Controller
{
    //
    function showPending(){

        $musics = DB::table('musics')->where('status','=','pending')->orderBy('id','desc')->get();

        return view('admin.Approved.list',compact('musics'));

    }

    function editStatus($id){
        $music = Music::findOrFail($id);
        $singer = Singer::findOrFail($id);

        return view('admin.Approved.edit',compact('music','singer'));
    }

    function listApproved(){
        $musics = DB::table('musics')->where('status','=','approved')->orderBy('id','desc')->get();
        return view('admin.Approved.listApproved',compact('musics'));
    }

    function approved(Request $request,$id){
        $music = Music::findOrFail($id);
        $music->status = $request->status;
        $music->save();

        return redirect()->route('browser.approved');

    }

    function listNotApproved(){
        $musics = DB::table('musics')->where('status','=','notApproved')->orderBy('id','desc')->get();
        return view('admin.Approved.notApproved',compact('musics'));
    }

    function deleteMusic($id){
        $music = Music::findOrFail($id);
        $music->delete();

        return redirect()->route('profile.upload');
    }

}
