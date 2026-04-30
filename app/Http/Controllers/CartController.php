<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    /**
     * Show cart page
     */
    public function index()
    {
        $cart = Session::get('cart', []);
        return view('frontend.cart', compact('cart'));
    }

    /**
     * Add product to cart
     */
    public function add($id)
    {
        $product = Product::findOrFail($id);

        $cart = Session::get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "price" => $product->price,
                "image" => $product->image,
                "quantity" => 1
            ];
        }

        Session::put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart');
    }

    /**
     * Remove item from cart
     */
    public function remove($id)
    {
        $cart = Session::get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
            Session::put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Item removed from cart');
    }

    /**
     * Update cart quantities
     */
    public function update(Request $request)
    {
        $cart = Session::get('cart', []);

        if ($request->has('quantity')) {
            foreach ($request->quantity as $id => $qty) {
                if (isset($cart[$id])) {
                    $cart[$id]['quantity'] = $qty;
                }
            }

            Session::put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Cart updated successfully');
    }
}