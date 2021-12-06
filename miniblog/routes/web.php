<?php

use App\Http\Controllers\Dashboard;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as AuthServiceProvider;


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');




Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [Dashboard::class, 'showPost'])->name('dashboard');


    Route::get('/post', [PostController::class, 'index'])->middleware(['can:isAdmin'])->name('post.index');


    Route::post('/post', [PostController::class, 'create'])->name('post.create');

    // edit
    Route::get('/post/edit/{id}', [PostController::class, 'edit'])->name('post.edit');
});

require __DIR__ . '/auth.php';
