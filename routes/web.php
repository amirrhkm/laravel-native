<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/product', function () {
    return view('product', ['products' => Product::all()]);
});

Route::get('/product/{id}', function ($id) {
    return view('product-detail', ['product' => Product::find($id)]);
});