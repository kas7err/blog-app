<?php

use App\Http\Controllers\PostConstroller;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostConstroller::class, 'index'])->name('home');
Route::get('/post/{slug}', [PostConstroller::class, 'show'])->name('post-title');
Route::get('/{category}', [PostConstroller::class, 'category'])->name('category');
