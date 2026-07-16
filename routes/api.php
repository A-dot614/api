<?php

use App\Http\Controllers\MoviesController;
use Illuminate\Http\Request;
use App\Models\Api;
use Illuminate\Support\Facades\Route;



// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('/movies', [MoviesController::class, 'index'])->name('home');
Route::post('/movies', [MoviesController::class, 'store'])->name('movies.store');
Route::get('/movies/{id}', [MoviesController::class, 'show'])->name('detail');