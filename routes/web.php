<?php
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::resource('posts', PostController::class)->middleware('auth');
Route::get('/', [PostController::class, 'index']);