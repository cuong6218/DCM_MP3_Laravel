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

});

Route::get('',[\App\Http\Controllers\HomeController::class,'index2'])->name('home2.index');
Route::get('songs/{id}',[\App\Http\Controllers\SongController::class,'show'])->name('home2.show');
Route::get('albums/{id}',[\App\Http\Controllers\AlbumController::class, 'show'])->name('home2.show-album');
Route::get('albums',[\App\Http\Controllers\HomeController::class, 'showListAlbums'])->name('home2.albums');
Route::get('singer',[\App\Http\Controllers\HomeController::class, 'showListSinger'])->name('home2.singer');
Route::get('singer/{id}',[\App\Http\Controllers\SongController::class, 'showListSongSinger'])->name('home2.song-singer');
