<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function show_all_products() {
        return view('products');
    }

    public function show_by_type($type) {
        return view('products');
    }

    public function show_product_detail($id) {
        return view('products');
    }
}

