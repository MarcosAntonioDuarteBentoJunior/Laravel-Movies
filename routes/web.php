<?php

use App\Http\Controllers\MoviesController;
use App\Http\Controllers\SeriesController;
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


Route::get('/', [MoviesController::class, 'index'])->name('movies.index');
Route::get('/filmes/{id}', [MoviesController::class, 'show'])->name('movies.show');

Route::get('/series', [SeriesController::class, 'index'])->name('shows.index');
Route::get('/series/{id}', [SeriesController::class, 'show'])->name('tv-shows.show');
