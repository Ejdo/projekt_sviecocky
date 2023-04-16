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
    
    public function store(Request $request, string $id): RedirectResponse
    {
        return view('cart');
        $product = Product::findOrFail($request->product_id);
        
        $cartItem = CartItem::where('cart_id', session()->get('cart_id'))
            ->where('product_id', $product->id)
            ->first();
        if ($cartItem) {
            $cartItem->increment('quantity');

        } else {
            
            $cartItem = new CartItem();
            $cartItem->cart_id = session()->get('cart_id');
            $cartItem->product_id = $product->id;
            $cartItem->quantity = 1;
            $cartItem->price = $product->price;
            $cartItem->save();
        }
        
        return redirect()->route('/cart')->with('success', 'Product added to cart successfully!');
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
