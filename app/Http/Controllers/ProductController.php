<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\PaymentInfo;
use App\Models\Order;
use App\Http\Requests;
use Session;
use Exception;
use Auth;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{


    public function products(){
        $products = Product::all();
        return view ('products', ['products' => $products]);
    }  

    public function categoryProducts($category){
        $products  = Product::select("*")->where("category", "=", $category)->get();
        return view ('products', ['products' => $products]);
    }  


    public function addToCart(Request $request, $id){
        $product = Product::find($id);
      $oldCart = $request->session()->has('cart') ? $request->session()->get('cart') : null;
      $cart = new Cart($oldCart);
      $cart->add($product, $product->id);
      $request->session()->put('cart', $cart);
        Session::save();
        return redirect()->route('products');
    }

    public function getReduceByOne($id) {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);

        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }
        return redirect()->route('cart');
    }

    public function getAddOne($id) {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->addOne($id);

        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }
        return redirect()->route('cart');
    }

    public function getCart() {
        if (!session()->has('cart')) {
            return view('cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

       
}


