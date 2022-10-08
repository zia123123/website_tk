<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\BeritaController;

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

Route::get('/home', function () {
    return view('home');
})->name('home')->middleware('auth');
