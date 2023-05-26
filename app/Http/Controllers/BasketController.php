<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BasketController extends Controller
{
    public function addToCart(Request $request, $productId)
    {
        $product = Product::findOrFail($productId);
        $user = Auth::user();

        $cart = Cart::firstOrNew(['user_id' => $user->id]);
        $cart->save();

        $cart->products()->attach($product, [
            'quantity' => $request->input('quantity', 1),
            'price' => $product->price,
        ]);

        return redirect()->route('cart')->with('success', 'Product added to cart successfully.');
    }

    public function showCart()
    {
        $user = Auth::user();
        $cart = Cart::with('products')->where('user_id', $user->id)->first();

        return view('cart', compact('cart'));
    }
}
