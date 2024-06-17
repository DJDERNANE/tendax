<?php

namespace App\Providers;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class CartServiceProvider extends ServiceProvider
{

    public function boot()
    {
        View::composer('*', function ($view) {
            if (Auth::check()) {
                $user = User::find(Auth::id());
                $cart = $user->cart;
                if($cart){
                    // Get all cart items along with product details
                    $cartItems = $cart->cartItems()->with('product')->get();
                    $cartTotal = $cartItems->sum(function ($item) {
                        return $item->quantity * $item->price;
                    });
                }else{
                    $cartTotal = 0;
                }
              
            } else {
                $cartTotal = 0;
            }

            $view->with('cartTotal', $cartTotal);
        });
    }
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
 
}
