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


    Route::prefix('categorys')->group(function (){
        Route::get('',[\App\Http\Controllers\CategoryController::class,'index'])->name('categorys.index');
        Route::get('/create',[\App\Http\Controllers\CategoryController::class,'create'])->name('categorys.create');
        Route::post('/create',[\App\Http\Controllers\CategoryController::class,'store'])->name('categorys.store');
        Route::get('/delete/{id}',[\App\Http\Controllers\CategoryController::class,'destroy'])->name('categorys.delete');
        Route::get('/edit/{id}',[\App\Http\Controllers\CategoryController::class,'edit'])->name('categorys.edit');
        Route::post('/edit/{id}',[\App\Http\Controllers\CategoryController::class,'update'])->name('categorys.update');

    });
    Route::prefix('singers')->group(function (){
        Route::get('', [\App\Http\Controllers\SingerController::class, 'index'])->name('singers.index');
    });

});


