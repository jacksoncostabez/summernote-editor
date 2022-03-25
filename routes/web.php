<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'index']);

Route::get('/create', function () {
    return view('create');
});

Route::post('/post', [PostController::class, 'store'])->name('post.store');