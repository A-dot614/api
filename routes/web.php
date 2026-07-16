<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Models\Api;
use App\Models\Movies;
use App\Http\Controllers\MoviesController;
use Illuminate\Support\Facades\Route;


//  Route::get('/',[MoviesController::class,'index'])->name('home');
// Route::get('/js',[HomeController::class,'js'])->name('js');



// Route::get('/dashboard',[ApiController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');
// Route::post('/collection-of-movies',[ApiController::class,'store'])->middleware(['auth', 'verified'])->name('collection.store');
// Route::get('/collection-of-movies',[ApiController::class,'collection'])->middleware(['auth', 'verified'])->name('collection');
// Route::get('/{api}/show',[ApiController::class,'show'])->middleware(['auth', 'verified'])->name('show');
// Route::get('/form',[ApiController::class,'create'])->middleware(['auth', 'verified'])->name('create');
// Route::get('/collection-of-movies',[ApiController::class,'collection'])->middleware(['auth', 'verified'])->name('collection');
// Route::get('/{api}/edit',[ApiController::class,"edit"])->name('edit');
// Route::delete('/{api}/delete',[ApiController::class,"destroy"])->name('delete');
// Route::put('/{api}/update',[ApiController::class,"update"])->name('update');





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
