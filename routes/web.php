<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::view('/', 'home');
Route::view('/about', 'about');

Route::resource('product', ProductController::class);