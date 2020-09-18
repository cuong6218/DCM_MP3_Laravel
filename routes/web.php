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
