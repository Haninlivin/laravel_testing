<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

//Home
// Route::get('/', [HomeController::class, 'testroot'])->name('root');

Route::resource('post', HomeController::class);

Route::get('logout', [AuthController::class, 'logout']);

Route::middleware([
    'auth:sanctum',
    'verified',
])->get('/post', [HomeController::class, 'index']);
