<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/product/create', function () {
    return view('products.create');
});

Route::post('/product', function () {
    request()->validate([
        'name'=> ['required','min:8'],
        'price'=> ['required'],
    ]);
    Product::create([
        'name'=>request('name'),
        'price'=>request('price'),
        'brand_id'=>1
    ]);
    return redirect('/product');
});

Route::get('/product', function () {
    $products = Product::with('brand')->latest()->paginate(5);
    return view('products.index', ['products' => $products]);
});

Route::get('/product/{id}', function ($id) {
    return view('products.details', ['product' => Product::find($id)]);
});

Route::get('/product/{id}/edit', function ($id) {
    return view('products.edit', ['product' => Product::find($id)]);
});

Route::patch('/product/{id}', function ($id) {
    request()->validate([
        'name'=> ['required'],
        'price'=> ['required'],
    ]);

    $product = Product::findOrFail($id);
    $product->name = request('name');
    $product->price = request('price');
    $product->save();

    $product->update([
        'name'=> request('name'),
        'price'=> request('price'),
    ]);

    return redirect('/product/'. $product->id);
});

Route::delete('/product/{id}', function ($id) {
    Product::findOrFail($id)->delete();
    return redirect('/product');
});