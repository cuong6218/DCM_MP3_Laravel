<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{
    //
    function storeComment(CommentRequest $request,$id){

        $comment = new Comment();
        $comment->comment = $request->comment;
        $comment->user_id = Auth::user()->id;
        $comment->song_id = $id;
        $comment->save();

        toastr()->success('Comment Success', 'Success!');
        return redirect()->back();
    }


}
