<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cartitem;
use App\Models\Product;
use App\Models\User;
use App\Models\Country;
use App\Models\Address;

class CheckoutController extends Controller
{
    public function show_checkout() {
        $cart = session()->get('cart');
        $cartItems = [];
        $cart_items = [];
        $totalPrice = 0;
        $totalQuantity = 0;
        
        
        if (Auth::check()) {
            $user = Auth::user(); 
            $items = ($user->cartItems);

            $address = $user->address ;
            $country = Country::find($address->country_id);
            

            if (!$items->isEmpty()) {
                $totalQuantity = $user->cartItems->sum('quantity');
                
                $totalPrice = 0;
                foreach ($user->cartItems as $cart_item) {
                    $totalPrice += $cart_item->quantity * $cart_item->product->price;
                }
                
            }
            $tax = ($country->tax ?? 0) * $totalPrice;
            return view('checkout', [
                'totalPrice' => $totalPrice,
                'address' => $address->address,
                'name' => $user->first_name,
                'surname' => $user->last_name,
                'number' => $user->phone_number,
                'city' => $user->city,
                'postal' => $user->postal_code,
                'name' => $user->first_name,
                'country' => $country->name ?? '',
                'tax' =>  $country->tax,
                'email' => $user->email,
            ]);
        }

        if ($cart) {
            foreach ($cart as $id => $item) {
                $product = Product::find($id);

                if ($product) {
                    $itemTotalPrice = $item['quantity'] * ($product->price - $product->discount);
                    $totalPrice += $itemTotalPrice;
                } else {
                    // Remove invalid product from cart
                    unset($cart[$id]);
                    session()->put('cart', $cart);
                }
            }
        }

        return view('checkout', [
                'totalPrice' => $totalPrice,
                'address' => '',
                'name' => '',
                'surname' => '',
                'number' => '',
                'city' => '',
                'postal' => '',
                'name' => '',
                'country' => '',
                'tax' => 0,
                'email' => '',
        ]);
    }

    public function update_checkout(Request $request) {
        
        $cart = json_decode($request->input('cart'), true);
        $totalPrice = 0;

        foreach ($cart as $id => $item) {
            $product = Product::find($id);

            if ($product) {
                $itemTotalPrice = $item['quantity'] * ($product->price - $product->discount);
                $totalPrice += $itemTotalPrice;
            } else {
                // Remove invalid product from cart
                unset($cart[$id]);
                session()->put('cart', $cart);
            }
        }

        if ($request->filled('country')) {
            $countryName = $request->input('country');
            $country = Country::where('name', $countryName)->first();
            if (!$country) {
                return redirect()->back()->withErrors(['country' => 'Country does not exists!'] );
            }
           
        }

        return view('ship', [
            'shipping' => $request->shipping,
            'totalPrice' => $totalPrice,
            'address' => $request->address,
            'name' => $request->fname,
            'surname' => $request->lname,
            'number' => $request->pnumber,
            'city' => $request->city,
            'postal' => $request->postal_code,
            'name' => $request->first_name,
            'country' => $country->name ,
            'tax' => $country->tax,
            'email' => $request->email,
        ]);
    }
}