<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::find(Auth::id());
        $cart = $user->cart;

        // Get all cart items along with product details
        $cartItems = $cart->cartItems()->with('product')->get();

        // Return the products with their price and quantity
        $products = $cartItems->map(function($cartItem) {
            return [
                'product_id' => $cartItem->product->id,
                'name' => $cartItem->product->name,
                'picture'=> $cartItem->product->picture,
                'price' => $cartItem->price,
                'quantity' => $cartItem->quantity
            ];
        });

        // You can return a view or JSON response
        return view('store.cart', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return 'ok';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user= User::where('id',Auth::id() )->first();
        if(!$user->cart){
            $cart = Cart::create([
                'user_id' => Auth::id(),
            ]);
        }
        $product = Product::where('id',$request->product_id) ->first();
       $item = CartItem::create([
        'cart_id' => $user->cart->id,
        'product_id' => $request->product_id,
        'quantity' => $request->qte,
        'price' => $product->price
       ]);
       return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
