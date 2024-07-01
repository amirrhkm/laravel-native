<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Product
{
    public static function all(): array {
        return [
            [
                'id'=>1,
                'name'=>'Mouse',
                'price'=>'RM 120.00'
            ],
            [
                'id'=>2,
                'name'=>'Keyboard',
                'price'=>'RM 250.00'
            ],
            [
                'id'=>3,
                'name'=>'Monitor',
                'price'=>'RM 780.00'
            ]
        ];
    }
    public static function find(int $id): array {
        $product = Arr::first(static::all(), fn($product)=>$product['id']==$id);
        
        if(! $product) {
            abort(404);   
        }

        return $product;
    }
}
