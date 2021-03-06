<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Route::post('register',[\App\Http\Controllers\RegisterController::class,'register'])->name('customer.register');


//Route::get('register', [\App\Http\Controllers\LayoutController::class, 'showRegister'])->name('layout.showRegister');
//Route::post('register', [\App\Http\Controllers\LayoutController::class, 'register'])->name('layout.register');
Route::get('show-login', [\App\Http\Controllers\LayoutController::class, 'showLogin'])->name('layout.showLogin');
Route::post('admin-login', [\App\Http\Controllers\LayoutController::class, 'login'])->name('layout.login');
Route::get('logout', [\App\Http\Controllers\LayoutController::class, 'logout'])->name('layout.logout');

Route::middleware('checkLogin')->prefix('admin')->group(function (){

    Route::get('', [\App\Http\Controllers\LayoutController::class, 'index'])->name('layout.index');
    Route::prefix('categorys')->group(function (){
        Route::get('',[\App\Http\Controllers\CategoryController::class,'index'])->name('categorys.index');
        Route::get('/create',[\App\Http\Controllers\CategoryController::class,'create'])->name('categorys.create');
        Route::post('/create',[\App\Http\Controllers\CategoryController::class,'store'])->name('categorys.store');
        Route::get('/delete/{id}',[\App\Http\Controllers\CategoryController::class,'destroy'])->name('categorys.delete');
        Route::get('/edit/{id}',[\App\Http\Controllers\CategoryController::class,'edit'])->name('categorys.edit');
        Route::post('/edit/{id}',[\App\Http\Controllers\CategoryController::class,'update'])->name('categorys.update');

    });
    Route::prefix('albums')->group(function (){
        Route::get('',[\App\Http\Controllers\AlbumController::class,'index'])->name('albums.index');
        Route::get('/create',[\App\Http\Controllers\AlbumController::class,'create'])->name('albums.create');
        Route::post('/create',[\App\Http\Controllers\AlbumController::class,'store'])->name('albums.store');
        Route::get('/delete/{id}',[\App\Http\Controllers\AlbumController::class,'destroy'])->name('albums.delete');
        Route::get('/edit/{id}',[\App\Http\Controllers\AlbumController::class,'edit'])->name('albums.edit');
        Route::post('/edit/{id}',[\App\Http\Controllers\AlbumController::class,'update'])->name('albums.update');
    });
    Route::prefix('songs')->group(function (){
        Route::get('',[\App\Http\Controllers\SongController::class,'index'])->name('songs.index');
        Route::get('/create',[\App\Http\Controllers\SongController::class,'create'])->name('songs.create');
        Route::post('/create',[\App\Http\Controllers\SongController::class,'store'])->name('songs.store');
        Route::get('/delete/{id}',[\App\Http\Controllers\SongController::class,'destroy'])->name('songs.delete');
        Route::get('/edit/{id}',[\App\Http\Controllers\SongController::class,'edit'])->name('songs.edit');
        Route::post('/edit/{id}',[\App\Http\Controllers\SongController::class,'update'])->name('songs.update');
        Route::get('/destroy/{id}',[\App\Http\Controllers\SongController::class,'softDelete'])->name('songs.softDelete');


    });


    Route::prefix('tags')->group(function (){
        Route::get('list',[\App\Http\Controllers\TagController::class,'index'])->name('tags.create');
        Route::post('list',[\App\Http\Controllers\TagController::class,'store'])->name('tags.store');
        Route::get('list/{id}',[\App\Http\Controllers\TagController::class,'destroy'])->name('tags.destroy');
    });

    Route::prefix('singers')->group(function (){
        Route::get('', [\App\Http\Controllers\SingerController::class, 'index'])->name('singers.index');
        Route::get('/create', [\App\Http\Controllers\SingerController::class, 'create'])->name('singers.create');
        Route::post('/store', [\App\Http\Controllers\SingerController::class, 'store'])->name('singers.store');
        Route::get('/{id}/delete', [\App\Http\Controllers\SingerController::class, 'destroy'])->name('singers.delete');
        Route::get('/{id}/edit', [\App\Http\Controllers\SingerController::class, 'edit'])->name('singers.edit');
        Route::post('/{id}/update', [\App\Http\Controllers\SingerController::class, 'update'])->name('singers.update');
    });

    Route::prefix('browser')->group(function (){
        Route::get('pending',[\App\Http\Controllers\ApprovedController::class,'showPending'])->name('browser.pending');
        Route::get('status/{id}',[\App\Http\Controllers\ApprovedController::class,'editStatus'])->name('browser.status');
        Route::get('approved',[\App\Http\Controllers\ApprovedController::class,'listApproved'])->name('browser.approved');
        Route::post('status/{id}',[\App\Http\Controllers\ApprovedController::class,'approved'])->name('browser.approved.edit');
        Route::get('notApproved',[\App\Http\Controllers\ApprovedController::class,'listNotApproved'])->name('browser.notApproved.list');
    });

});

Route::get('',[\App\Http\Controllers\HomeController::class,'index2'])->name('home2.index');
Route::get('songs/{id}',[\App\Http\Controllers\SongController::class,'show'])->name('home2.show');
Route::post('songs/{id}',[\App\Http\Controllers\CommentController::class,'storeComment'])->name('comment.store');
Route::get('tags/{id}',[\App\Http\Controllers\TagController::class,'show'])->name('tags.index');

Route::get('albums/{id}',[\App\Http\Controllers\AlbumController::class, 'show'])->name('home2.show-album');
Route::get('albums',[\App\Http\Controllers\HomeController::class, 'showListAlbums'])->name('home2.albums');
Route::get('singer',[\App\Http\Controllers\HomeController::class, 'showListSinger'])->name('home2.singer');
Route::get('singer/{id}',[\App\Http\Controllers\SongController::class, 'showListSongSinger'])->name('home2.song-singer');
Route::get('songs',[\App\Http\Controllers\HomeController::class, 'showListSong'])->name('home2.song');
Route::get('songs/search/{name}',[\App\Http\Controllers\SongController::class,'showSearch'])->name('home2.show-search');
Route::get('/search', [\App\Http\Controllers\SongController::class,'search'])->name('songs.search');

Route::prefix('users')->group(function (){
    Route::get('register',[\App\Http\Controllers\UserController::class,'indexRegister'])->name('users.register');
    Route::get('login',[\App\Http\Controllers\UserController::class,'indexLogin'])->name('users.login');
    Route::post('register',[\App\Http\Controllers\UserController::class,'storeRegister'])->name('users.register.store');
    Route::post('login',[\App\Http\Controllers\UserController::class,'storeLogin'])->name('users.login.store');
    Route::get('logout',[\App\Http\Controllers\UserController::class,'logout'])->name('users.logout.store');
});

Route::prefix('profile')->middleware('auth')->group(function (){
    Route::get('/upload',[\App\Http\Controllers\ProfileController::class,'indexMusicUser'])->name('profile.upload');
    Route::post('/upload',[\App\Http\Controllers\ProfileController::class,'storeAddMusics'])->name('profile.upload.store');
    Route::get('/list',[\App\Http\Controllers\ProfileController::class,'indexListUpload'])->name('profile.list');

    Route::get('/list/{id}',[\App\Http\Controllers\ProfileController::class,'showPending'])->name('profile.pending');
    Route::get('/delete/{id}',[\App\Http\Controllers\ApprovedController::class,'deleteMusic'])->name('profile.delete');
    Route::get('/users/{id}',[\App\Http\Controllers\ProfileController::class,'showProfile'])->name('profile.users');
    Route::post('/users/{id}',[\App\Http\Controllers\ProfileController::class,'updateUser'])->name('profile.users.update');
    Route::get('/change',[\App\Http\Controllers\ProfileController::class,'showChangePassword'])->name('profile.password');
    Route::post('/change',[\App\Http\Controllers\ProfileController::class,'postChangePassword'])->name('profile.password.update');

    Route::get('/edit-music/{id}',[\App\Http\Controllers\ProfileController::class,'editMusic'])->name('profile.musics.edit');
    Route::post('/edit-music/{id}',[\App\Http\Controllers\ProfileController::class,'updateMusic'])->name('profile.musics.update');

    Route::prefix('playlist')->group(function (){
        Route::get('/{id}', [\App\Http\Controllers\PlaylistController::class, 'index'])->name('playlist.index');
        Route::get('/add', [\App\Http\Controllers\PlaylistController::class, 'create'])->name('playlist.create');
        Route::post('/add', [\App\Http\Controllers\PlaylistController::class, 'store'])->name('playlist.store');
        Route::get('/{id}/show', [\App\Http\Controllers\PlaylistController::class, 'show'])->name('playlist.show');
        Route::get('/{id}/delete', [\App\Http\Controllers\PlaylistController::class, 'destroy'])->name('playlist.destroy');
        Route::get('/{playlist_id}/add-song/{song_id}', [\App\Http\Controllers\PlaylistController::class, 'addSong'])->name('playlists.addSong');
        Route::get('/{playlist_id}/delete-song/{song_id}', [\App\Http\Controllers\PlaylistController::class, 'deleteSong'])->name('playlists.deleteSong');

        Route::get('/auto-playlist/{id}',[\App\Http\Controllers\Autoplay::class,'autoplayPlaylist'])->name('playlist.auto');
    });

    Route::get('like/{id}',[\App\Http\Controllers\SongController::class,'like'])->name('show.like');
    Route::get('dislike/{id}',[\App\Http\Controllers\SongController::class,'disLike'])->name('show.dislike');

});

Route::get('/auth/redirect/{provider}', [\App\Http\Controllers\SocialController::class,'redirect']);

Route::get('/callback/{provider}', [\App\Http\Controllers\SocialController::class,'callback']);


Route::prefix('auto')->group(function (){
    Route::get('/list-singer/{id}',[\App\Http\Controllers\Autoplay::class,'autoplaySinger'])->name('auto.listSinger');
});

Route::post('/listen/{id}',[\App\Http\Controllers\SongController::class,'listen']);

