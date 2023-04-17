<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cartitem;
use App\Models\Product;

class CartController extends Controller
{
    public function show_cart() {
        return view('cart');
    }
    
    public function addToCart($id)
{
    $product = Product::find($id);
    dd($product);
    if(!$product) {
        abort(404);
    }

    $cart = session()->get('cart');

    if(!$cart) {
        $cart = [
            $id => [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->image
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
        "name" => $product->name,
        "quantity" => 1,
        "price" => $product->price,
        "image" => $product->image
    ];

    session()->put('cart', $cart);
    return redirect()->back()->with('success', 'Product added to cart successfully!');
}

    public function update(Request $request, $id)
    {
        $cartItem = CartItem::findOrFail($id);
        $quantity = $request->quantity;

        if ($quantity == 0) {
            $cartItem->delete();
        } else {
            $cartItem->quantity = $quantity;
            $cartItem->save();
        }

        return redirect()->route('cart.index')->with('success', 'Cart updated successfully!');
    }

    public function destroy($id)
    {
        $cartItem = CartItem::findOrFail($id);
        $cartItem->delete();

        return redirect()->route('cart.index')->with('success', 'Product removed from cart successfully!');
    }

    private function getTotal()
    {
        $cartItems = CartItem::where('cart_id', session()->get('cart_id'))->get();
        $total = 0;

        foreach ($cartItems as $cartItem) {
            $total += $cartItem->quantity * $cartItem->price;
        }

        return $total;
    }


  
}
