<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\GenreController;

Route::get('/', function () {
    return redirect('/books');
});

Route::get('/books', [BookController::class, 'index']);

Route::get('/authors', [AuthorController::class, 'index']);

Route::get('/genres', [GenreController::class, 'index']);
