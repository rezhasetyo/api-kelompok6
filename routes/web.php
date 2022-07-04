<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\GenreController;


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

// Route::get('/', function () {   return view('film'); });
// Route::get('/genre', function () {   return view('genre'); });

Route::get('/', [FilmController::class, 'index']);
Route::resource('/film', FilmController::class)->only('index', 'show');
Route::resource('/genre', GenreController::class)->only('index');
