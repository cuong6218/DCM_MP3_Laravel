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

use App\Models\Tag;

use http\Client\Response;
use http\Params;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Symfony\Component\Console\Input\Input;

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
        $tags = Tag::all();
        return view('admin.songs.create', compact('albums', 'categorys', 'singers','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
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
        $song->tags()->sync($request->tags,false);



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
        $song = Song::findOrFail($id);

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

        return view('template.detail', compact('shows', 'likeCtr', 'dislikeCtr', 'comments','song'));

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
        $song = Song::findOrFail($id);
        $singer = Singer::all();
        $albums = Album::all();
        $tags = Tag::all();
        return view('admin.songs.edit', compact('song','singer','albums'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
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

    public function showSearch(Request $request)
    {
        if ($request->server) {
            $query = $request->server->get('PATH_INFO');
            $query = str_replace('/songs/search/', '', $query);

            $songs = DB::table('songs')
                ->where('song_name', 'LIKE', "%{$query}%")
                ->get();
            $singers = DB::table('singers')
                ->where('singer_name', 'LIKE', "%{$query}%")
                ->get();
            $playlists = DB::table('playlists')
                ->where('playlist_name', 'LIKE', "%{$query}%")
                ->get();
            return view('template.demo.search-song', compact('songs', 'singers', 'query', 'playlists'));
        }
    }


    public function search(Request $request)
    {
        if ($request->query) {
            $query = $request->query('name');
            $data = DB::table(DB::raw('songs' . ',' . 'singers' . ',' . 'playlists'))
                ->where('song_name', 'LIKE', "%{$query}%")
                ->orWhere('singer_name', 'LIKE', "%{$query}%")
                ->orWhere('playlist_name', 'LIKE', "%{$query}%")->limit(1)
                ->get();
            $output = '<ul class="dropdown-menu" style="display: block;width: 84% ">';
            foreach ($data as $row) {
                    $output .= '<li style="margin-left: 10px;">';
                    $output .= '<a href="' . route('home2.show-search', $row->song_name) . '">';
                    $output .= '<p style="font-size: 14px;font-weight: bold">'
                        . $row->song_name
                        . '<i style="font-size: 12px;font-weight: normal">-trong bài hát</i></p>';
                    $output .= '</a></li>';
                    $output .= '<li style="margin-left: 10px">';
                    $output .= '<a href="' . route('home2.show-search', $row->singer_name) . '">';
                    $output .= '<p style="font-size: 14px;font-weight: bold">'
                        . $row->singer_name
                        . '<i style="font-size: 12px;font-weight: normal">-trong ca sĩ</i></p>';
                    $output .= '</a></li>';
                    $output .= '<li style="margin-left: 10px">';
                    $output .= '<a href="' . route('home2.show-search', $row->playlist_name) . '">';
                    $output .= '<p style="font-size: 14px;font-weight: bold">'
                        . $row->playlist_name
                        . '<i style="font-size: 12px;font-weight: normal">-trong playlist</i></p>';
                    $output .= '</a></li>';
            }
            $output .= '</ul>';
            echo $output;
        }
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


    }

}
