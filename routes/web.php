<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

Route::get('/{genre_id?}', [MovieController::class, 'homePage'])->name('home.index');
Route::get('/movie/add', [MovieController::class, 'addMovie'])->name('movie.add');
Route::post('/movie/store', [MovieController::class, 'storeMovie'])->name('movie.store');
Route::get('/movie/delete/{movie}', [MovieController::class, 'deleteMovie'])->name('movie.delete');
