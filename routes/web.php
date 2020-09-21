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
Route::post('register',[\App\Http\Controllers\RegisterController::class,'register'])->name('customer.register');
Route::get('login', [\App\Http\Controllers\LayoutController::class, 'showLogin'])->name('layout.showLogin');
Route::post('login', [\App\Http\Controllers\LayoutController::class, 'login'])->name('layout.login');
Route::get('register', [\App\Http\Controllers\LayoutController::class, 'showRegister'])->name('layout.showRegister');
Route::post('register', [\App\Http\Controllers\LayoutController::class, 'register'])->name('layout.register');
Route::get('logout', [\App\Http\Controllers\LayoutController::class, 'logout'])->name('layout.logout');
Route::prefix('admin')->group(function (){
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

Route::middleware('auth')->get('',[\App\Http\Controllers\HomeController::class,'index2'])->name('home2.index');
Route::get('songs/{id}',[\App\Http\Controllers\SongController::class,'show'])->name('home2.show');
Route::get('albums/{id}',[\App\Http\Controllers\AlbumController::class, 'show'])->name('home2.show-album');
Route::get('albums',[\App\Http\Controllers\HomeController::class, 'showListAlbums'])->name('home2.albums');
Route::get('singer',[\App\Http\Controllers\HomeController::class, 'showListSinger'])->name('home2.singer');
Route::get('singer/{id}',[\App\Http\Controllers\SongController::class, 'showListSongSinger'])->name('home2.song-singer');
Route::get('songs',[\App\Http\Controllers\HomeController::class, 'showListSong'])->name('home2.song');


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
});


