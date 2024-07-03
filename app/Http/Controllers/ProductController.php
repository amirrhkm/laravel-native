<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('brand')->latest()->paginate(5);
        return view('products.index', ['products' => $products]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        request()->validate([
            'name'=> ['required', 'min:4'],
            'price'=> ['required'],
        ]);
        Product::create([
            'name'=>request('name'),
            'price'=>request('price'),
            'brand_id'=>1
        ]);
        return redirect('/product');
    }

    public function show(Product $product)
    {
        return view('products.details', ['product' => $product]);
    }

    public function edit(Product $product)
    {
        if(Auth::guest()) {
            return redirect('/login');
        }

        if($product->brand->user->isNot(Auth::user())) {
            abort(403);
        }

        return view('products.edit', ['product' => $product]);
    }

    public function update(Product $product)
    {
        request()->validate([
            'name'=> ['required','min:4'],
            'price'=> ['required'],
        ]);
    
        $product->name = request('name');
        $product->price = request('price');
        $product->save();
    
        $product->update([
            'name'=> request('name'),
            'price'=> request('price'),
        ]);
    
        return redirect('/product/'. $product->id);
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('/product');
    }
}
