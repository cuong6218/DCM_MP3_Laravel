<?php

namespace App\Http\Controllers;

use App\Http\Requests\SongRequest;
use App\Http\Services\PlaylistService;
use App\Http\Services\SongService;
use App\Models\Album;
use App\Models\Category;
use App\Models\Dislike;
use App\Models\Likes;
use App\Models\Singer;
use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class SongController extends Controller
{
    protected $songService;
    protected $playlistService;

    public function __construct(SongService $songService,
                                PlaylistService $playlistService)
    {
        $this->songService = $songService;
        $this->playlistService = $playlistService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
//        $songs = DB::table('songs')->select('*')->orderBy('id', 'desc')->simplePaginate(5);
        $songs = $this->songService->getTrash();
        return view('admin.songs.list', compact('songs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $albums = Album::all();
        $categorys = Category::all();
        $singers = Singer::all();
        return view('admin.songs.create', compact('albums', 'categorys', 'singers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(SongRequest $request)
    {
        //
        $song = new Song();
        $song->song_name = $request->song_name;

        if ($request->hasFile('audio')) {
            $audio = $request->file('audio');

            $path1 = $audio->store('audios', 'public');
            $song->audio = $path1;
        }

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $song->image = $path;
        }

        $song->author = $request->author;
        $song->views = '1';
        $song->singer_id = $request->singer_id;
        $song->album_id = $request->album_id;
        $song->category_id = $request->category_id;
        $song->save();
        return redirect()->route('songs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
//        $views = 'song_' . $id;
//        if (!Session::has($views)) {
//            Song::where('id', $id)->increment('views');
//            Session::put($views, 1);
//        } else {
//            Session::forget($views);
//        }

        $likeSong = Song::find($id);
        $likeCtr = Likes::where(['song_id' => $likeSong->id])->count();
        $dislikeCtr = Dislike::where(['song_id' => $likeSong->id])->count();

        $comments = DB::table('songs')
            ->join('comments', 'songs.id', 'comments.song_id')
            ->join('users', 'comments.user_id', 'users.id')
            ->select('songs.*', 'comments.*', 'users.name')
            ->where('songs.id', '=', "$id")
            ->orderBy('comments.id', 'desc')
            ->simplePaginate(5);

        $shows = DB::table('singers')
            ->join('songs', 'singers.id', 'songs.singer_id')
            ->join('albums', 'songs.album_id', 'albums.id')
            ->select('singers.*', 'songs.*', 'albums.album_name')
            ->where('songs.id', '=', "$id")
            ->get();

        return view('template.detail', compact('shows', 'likeCtr', 'dislikeCtr', 'comments'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $song = Song::findOrFail($id);
        $song->delete();
        return redirect()->route('songs.index');
    }

    function showListSongSinger($id)
    {

        $lists = DB::table('singers')
            ->join('songs', 'singers.id', 'songs.singer_id')
            ->join('albums', 'songs.album_id', 'albums.id')
            ->select('songs.*', 'albums.album_name', 'singers.*')
            ->where('singers.id', '=', "$id")
            ->get();

        return view('template.demo.detail-singer', compact('lists'));

    }

    function like($id)
    {
        $loggedin_user = Auth::user()->id;
        $like_user = Likes::where(['user_id' => $loggedin_user, 'song_id' => $id])->first();

        if (empty($like_user->user_id)) {
            $user_id = Auth::user()->id;
            $email = Auth::user()->email;
            $song_id = $id;
            $like = new Likes();
            $like->user_id = $user_id;
            $like->email = $email;
            $like->song_id = $song_id;
            $like->save();
            return redirect()->back();
        } else {
            return redirect()->back();
        }

    }

    function disLike($id)
    {
        $loggedin_user = Auth::user()->id;
        $like_user = Dislike::where(['user_id' => $loggedin_user, 'song_id' => $id])->first();

        if (empty($like_user->user_id)) {
            $user_id = Auth::user()->id;
            $email = Auth::user()->email;
            $song_id = $id;
            $like = new Dislike();
            $like->user_id = $user_id;
            $like->email = $email;
            $like->song_id = $song_id;
            $like->save();
            return redirect()->back();
        } else {
            return redirect()->back();
        }

    }

    function softDelete($id)
    {
        $this->songService->sortDelete($id);
        return back();
    }


    function listen($id)
    {
        $views = 'song_' . $id;
        if (!Session::has($views)) {
            Song::where('id', $id)->increment('views');
            Session::put($views, 1);
        }
        return redirect()->back();

//    function choosePlaylist($id){
//        $playlists = $this->playlistService->getAll();
//        $song = $this->songService->show($id);
//        return view('template.demo.playlist-song', compact('playlists', 'song'));
//    }
//    function addSong($playlist_id, $song_id){
//        $this->songService->addSong($request, $id);
//        return redirect()->route('playlist.index');
//
//    }
    }
}
