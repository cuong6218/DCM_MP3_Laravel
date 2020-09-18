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

Route::get('', [\App\Http\Controllers\HomeController::class,'index'])->name('home.index');
Route::get('albums', [\App\Http\Controllers\HomeController::class,'indexAlbums'])->name('home.albums');
Route::prefix('admin')->group(function (){
    Route::get('', [\App\Http\Controllers\LayoutController::class, 'index'])->name('layout.index');

    Route::prefix('albums')->group(function (){
        Route::get('',[\App\Http\Controllers\CategoryController::class,'index'])->name('albums.index');
        Route::get('/create',[\App\Http\Controllers\CategoryController::class,'create'])->name('albums.create');
    });

});


