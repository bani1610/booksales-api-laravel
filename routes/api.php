<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\GenreController;

Route::apiResources([
	'books' => BookController::class,
	'authors' => AuthorController::class,
	'genres' => GenreController::class,
], [
	'only' => ['index', 'show'],
]);

Route::middleware(['auth', 'admin'])->group(function () {
	Route::apiResources([
		'books' => BookController::class,
		'authors' => AuthorController::class,
		'genres' => GenreController::class,
	], [
		'except' => ['index', 'show'],
	]);
});
