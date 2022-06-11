<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Order;
use App\Models\Cart;
use App\Models\Product;
use Auth;

class OrderController extends Controller
{
    public function getOrders(){
        $orders = Auth::user()->orders;
        $user = Auth::id();
        // $orders = DB::table('orders')->where('user_id', $user)->value('cart');
        $orders->transform(function($order, $key) {
            $order->cart = unserialize($order->cart);
            return $order;
        });
        return view('profile', ['orders' => $orders]);
    }
}
