<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ImageModelController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShowController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/comment', function () {
    return view('comment.index');
})->name('comment');

Route::get('/image', function () {
    return view('imagemodel.index');
})->name('image');



Route::get('/show', [ShowController::class, 'index'])->middleware(['auth', 'verified'])->name('show');

Route::post('/comment/save', [CommentController::class, 'saveComment'])->middleware(['auth', 'verified'])->name('comment.save');

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::post('/imagemodel/save', [ImageModelController::class, 'imageModel'])->middleware(['auth', 'verified'])->name('imagemodel.save');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';