<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cartitem;
use App\Models\Product;

class CartController extends Controller
{

    
    public function addToCart(Request $request)
    {
        $id = $request->id; 
        $product = Product::find($id);
        
        if(!$product) {
            abort(404);
        }

        $cart = session()->get('cart');

        if(!$cart) {
            $cart = [
                $id => [
                    "product_id" => $product->name,
                    "name" => $product->name,
                    "quantity" => 1,
                    "price" => $product->price,
                    "image" => $product->photo_path
                ]
            ];
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        $cart[$id] = [
            "product_id" => $product->name,
            "name" => $product->name,
            "quantity" => 1,
            "price" => $product->price,
            "image" => $product->photo_path
        ];

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function show_cart()
    {
        $cart = session()->get('cart');
        $cartItems = [];
        $totalPrice = 0;
        $totalQuantity = 0;

        if ($cart) {
            foreach ($cart as $id => $item) {
                $product = Product::find($id);

                if ($product) {
                    $itemTotalPrice = $item['quantity'] * ($product->price - $product->discount);
                    $totalPrice += $itemTotalPrice;
                    $totalQuantity += $item['quantity'];

                    $cartItems[] = [
                        'id' => $id,
                        'name' => $product->name,
                        'quantity' => $item['quantity'],
                        'price' => $product->price,
                        'discount' => $product->discount,
                        'item_total_price' => $itemTotalPrice,
                        'photo_path' => $product->photo_path,
                    ];
                } else {
                    // Remove invalid product from cart
                    unset($cart[$id]);
                    session()->put('cart', $cart);
                }
            }
        }

        return view('cart', [
            'cartItems' => $cartItems,
            'totalPrice' => $totalPrice,
            'totalQuantity' => $totalQuantity,
        ]);
    }

    public function removeCartItem($id)
{
    $cart = session()->get('cart');

    if(isset($cart[$id])) {
        unset($cart[$id]);
        session()->put('cart', $cart);
    }

    return redirect()->back()->with('success', 'Item has been removed');
}


  
}
