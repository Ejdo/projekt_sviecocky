<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function show_all_products($Page = 1) {
        $perPage = 20; // Number of products per page
        $skip = ($page - 1) * $perPage;
        $products = Product::skip($skip)->take($perPage)->get();
        $totalProducts = Product::count();
        $lastPage = ceil($totalProducts / $perPage);
        return view('products.index', compact('products', 'page', 'lastPage'));
    }

    public function show_by_type($type) {
        return view('products');
    }

    public function show_product_detail($id) {
        $product = Product::with('scents')->find($id);
        return view('products', ['product' => $product]);
    }
}

