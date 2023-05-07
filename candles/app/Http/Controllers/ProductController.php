<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Scent;
use App\Models\ProductType;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;


class ProductController extends Controller
{

    public function index(Request $request) {
        $scents = Scent::all();
        $types = ProductType::all();
        $brands = Brand::all();
        $categ = null;

        $productsQuery = Product::query();

        $filter_by = 'Price: High to Low';

        if ($request->filled('category')) {
            $categoryId = Category::where('name', $request->category)->value('id');
            $productsQuery->where('category_id', $categoryId);
            $categ = Category::where('name', $request->category)->first();
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
            $scentId = $request->scent;
            $productsQuery->whereHas('scents', function ($query) use ($scentId) {
                $query->where('scents.id', $scentId);
            });
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
        $products = $productsQuery->paginate(6);
        return view('products', compact('categ', 'scents', 'types', 'brands', 'products', 'filter_by'));
    }


    public function show_product_detail(Request $request) {
        if (Auth::check()) {
            $user = Auth::user(); 
            $cart = ($user->cartItems);
        }else{
            $cart = session()->get('cart');
        }
        $quantity = 1;
        $class = 'hidden';
        if ( isset($cart[$request->id]) ){
            $item = $cart[$request->id];
            $quantity = $item['quantity'];
            $class = '';
        }
        $product = Product::find($request->id);
        $trending = Product::where('trending', true)->take(4)->get();
        return view('product', ['product' => $product, 'trending'=> $trending, 'quantity' => $quantity,  'class' => $class]);
    }


    public function show_search() {
        return view('search');
    }

    public function search(Request $request) {
        $search = $request->input('search');


        
        $products = Product::where('name', 'LIKE', "%$search%")
            ->orWhere('description', 'LIKE', "%$search%")
            ->orWhereHas('category', function($query) use ($search) {
                $query->where('name', 'LIKE', "%$search%");
            })
            ->orWhereHas('scents', function ($query) use ($search) {
                $query->where('scents.name','LIKE', "%$search%");
            })
            ->get();

    
        return view('search', compact('products'));
    }
}

