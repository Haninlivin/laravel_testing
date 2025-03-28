<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

//Home
// Route::get('/', [HomeController::class, 'index']);

Route::resource('post', HomeController::class);
