<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class ProductController extends Controller
{

    public function show_all_products() {
        $products = Product::paginate(2);
        return view('products.index', ['products' =>  $products]);
    }

    public function show_by_type($type) {
        return view('products');
    }

    public function show_product_detail($id) {
        $product = Product::find($id);
        $trending = Product::where('trending', true)->take(4)->get();
        return view('product', ['product' => $product, 'trending'=> $trending]);
    }
}

