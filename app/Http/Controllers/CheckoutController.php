<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Order;
use App\Models\Cart;
use App\Models\Product;
use Auth;
use Session;

class CheckoutController extends Controller
{

    public function checkout(){
        return view('check-out');
    }

    public function getCheckout()
    {
        if (!Session::has('cart')) {
            return view('cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice + 100;
        return view('check-out', ['products' => $cart->items, 'total' => $total]);
    }


}