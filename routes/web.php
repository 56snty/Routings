<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

use App\Http\Controllers\SongController;

Route::get('/songs', [SongController::class, 'index']);
Route::get('/songs/{index}', [SongController::class, 'show']);
Route::get('/songs/create', [SongController::class, 'create']);
Route::get('/songs/{index}/edit', [SongController::class, 'edit']);


require __DIR__.'/auth.php';
