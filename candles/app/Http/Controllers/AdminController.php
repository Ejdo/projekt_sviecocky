<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\ProductType;
use App\Models\Brand;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function show_admin()
    {
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->isAdmin == 1) {
                $products = Product::all();
                return view('admin', compact('products'));
            } else {
                return redirect()->route('home');
            }
        }
        return redirect()->route('login');
    }

    public function show_edit_product($id)
    {
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->isAdmin == 1) {
                $product = Product::find($id);
                $categories = Category::all();
                $types = ProductType::all();
                $brands = Brand::all();
                return view('product_edit', compact('product','categories','types','brands'));
            } else {
                return redirect()->route('home');
            }
        }
        return redirect()->route('login');
    }

    public function view_create_product()
    {
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->isAdmin == 1) {
                $categories = Category::all();
                $types = ProductType::all();
                $brands = Brand::all();
                return view('product_create', compact('categories', 'types', 'brands'));
            } else {
                return redirect()->route('home');
            }
        }
        return redirect()->route('login');
    }

    public function create_product(Request $request)
    {
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->isAdmin == 1) {
                $product = new Product();

                $product->name = $request->input('name');
                $product->price = $request->input('price');
                $product->stock = $request->input('stock');
                $product->ean_code = $request->input('ean_code');
                $product->color = $request->input('color');
                $product->burn_hours = $request->input('burn_hours');
                $product->discount = $request->input('discount');
                $product->trending = $request->input('trending') ? true : false;
                $product->description = $request->input('description');
                $product->ingredients = $request->input('ingredients');
                $product->category_id = $request->input('category_id');
                $product->type_id = $request->input('type_id');
                $product->brand_id = $request->input('brand_id');
                $product->save();

                return redirect()->route('admin');
            } else {
                return redirect()->route('home');
            }
        }
        return redirect()->route('login');
    }

    public function update_product(Request $request, $id)
    {
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->isAdmin == 1) {
                $product = Product::findOrFail($id);

                $product->name = $request->input('name');
                $product->price = $request->input('price');
                $product->stock = $request->input('stock');
                $product->ean_code = $request->input('ean_code');
                $product->color = $request->input('color');
                $product->burn_hours = $request->input('burn_hours');
                $product->discount = $request->input('discount');
                $product->trending = $request->input('trending') ? true : false;
                $product->description = $request->input('description');
                $product->ingredients = $request->input('ingredients');
                $product->save();

                return redirect()->route('admin');
            } else {
                return redirect()->route('home');
            }
        }
        return redirect()->route('login');
    }
    
    public function delete_product($id)
    {
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->isAdmin == 1) {
                $product = Product::findOrFail($id);
                $product->delete();
                return redirect()->route('admin');
            } else {
                return redirect()->route('home');
            }
        }
        return redirect()->route('login');
    }
}