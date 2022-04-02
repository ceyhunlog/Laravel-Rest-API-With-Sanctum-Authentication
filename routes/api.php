<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\Product;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/products', function(){
    return Product::all();
});

Route::post('/products', function(){
    return Product::create([
        'name' => 'Product One',
        'slug' => 'product-one',
        'description' => 'This is product one',
        'price' => '99.99'
    ]);
});;