<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserpanelController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware('auth')->group(function () {
    Route::resource('/posts', PostController::class);
});

Route::get('/userpanel', [UserpanelController::class, 'index'])->name('userpanel.index');
Route::get('/userpanel/detail/{id}', [UserpanelController::class, 'show'])->name('userpanel.show');
Route::get('/userpanel/media', [UserpanelController::class, 'media'])->name('userpanel.media');
Route::get('/userpanel/csr', [UserpanelController::class, 'csr'])->name('userpanel.csr');
Route::get('/userpanel/year/{data}', [UserpanelController::class, 'year'])->name('userpanel.year');






require __DIR__ . '/auth.php';
