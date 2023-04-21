<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Scent;
use App\Models\ProductType;
use App\Models\Brand;
use App\Models\Category;

class ProductController extends Controller
{

    public function index(Request $request) {
        $scents = Scent::all();
        $types = ProductType::all();
        $brands = Brand::all();

        $productsQuery = Product::query();

        $filter_by = 'Price: High to Low';

        if ($request->filled('category')) {
            $categoryId = Category::where('name', $request->category)->value('id');
            $productsQuery->where('category_id', $categoryId);
        }

        if ($request->filled('brand')) {
            $categoryId = Brand::where('id', $request->brand)->value('id');
            $productsQuery->where('brand_id', $categoryId);
        }

        if ($request->filled('type')) {
            $categoryId = ProductType::where('id', $request->type)->value('id');
            $productsQuery->where('type_id', $categoryId);
        }

        if ($request->filled('scent')) {
            $categoryId = Category::where('id', $request->category)->value('id');
            $productsQuery->where('category_id', $categoryId);
        }

        if ($request->filled('color')) {
            $productsQuery->where('color', $request->color);
        }

        // sort by price
        if ($request->sort === 'price_asc') {
            $productsQuery->orderBy('price', 'asc');
            $filter_by = 'Price: Low to High';
        } elseif ($request->sort === 'price_desc') {
            $productsQuery->orderBy('price', 'desc');
        }
    
        // Get the filtered products
        $products = $productsQuery->paginate(10);
    
        return view('products', compact('scents', 'types', 'brands', 'products', 'filter_by'));
    }


    public function show_product_detail(Request $request) {
        $product = Product::find($request->id);
        $trending = Product::where('trending', true)->take(4)->get();
        return view('product', ['product' => $product, 'trending'=> $trending]);
    }
}

