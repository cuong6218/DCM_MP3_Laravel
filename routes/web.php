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
Route::get('', [\App\Http\Controllers\HomeController::class,'index'])->name('home.index');
Route::get('albums', [\App\Http\Controllers\HomeController::class,'indexAlbums'])->name('home.albums');
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


    Route::prefix('singers')->group(function (){
        Route::get('', [\App\Http\Controllers\SingerController::class, 'index'])->name('singers.index');
        Route::get('/create', [\App\Http\Controllers\SingerController::class, 'create'])->name('singers.create');
        Route::post('/store', [\App\Http\Controllers\SingerController::class, 'store'])->name('singers.store');
        Route::get('/{id}/delete', [\App\Http\Controllers\SingerController::class, 'destroy'])->name('singers.delete');
    });

});


