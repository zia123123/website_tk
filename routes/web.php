<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\AboutController;

use App\Http\Controllers\VisimisiController;

use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\ProgrampendaftaranController;





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

Route::get('/', [LandingPageController::class, 'index'])->name('/');
Route::get('/program', [ProgramController::class, 'index'])->name('/program');
Route::get('/galeri', [GaleriController::class, 'index'])->name('/galeri');
Route::get('/pendaftaran', [PendaftaranController::class, 'index'])->name('/pendaftaran');
Route::get('/berita', [BeritaController::class, 'index'])->name('/berita');

Auth::routes();

Route::resource('users', \App\Http\Controllers\UserController::class)
    ->middleware('auth');

Route::resource('articles', \App\Http\Controllers\ArticlesController::class)
    ->middleware('auth');

Route::resource('programs', \App\Http\Controllers\ProgramController::class)
    ->middleware('auth');

Route::resource('gallery', \App\Http\Controllers\GalleryController::class)
->middleware('auth');

Route::resource('about', \App\Http\Controllers\AboutController::class)
->middleware('auth');

Route::resource('visimisi', \App\Http\Controllers\VisimisiController::class)
->middleware('auth');

Route::resource('kegiatan', \App\Http\Controllers\KegiatanController::class)
->middleware('auth');


Route::resource('programpendaftaran', \App\Http\Controllers\ProgrampendaftaranController::class)
->middleware('auth');



Route::get('/home', function () {
    return view('home');
})->name('home')->middleware('auth');
