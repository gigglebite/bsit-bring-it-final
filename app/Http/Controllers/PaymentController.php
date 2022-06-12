<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Payment;
use Session;
use Exception;
use Auth;

class PaymentController extends Controller
{

    
    public function saveNewPayment (Request $request)
{

    $validated = $request->validate([
        'card_name' => 'required|max:150',
        'card_number' => 'required|digits:16',
        'card_expiry_month' => 'required|digits:2',
        'card_expiry_year' => 'required|digits:4',
        'cvc' => 'required|max:3',
        'name' => 'required|max:150',
        'address' => 'required|max:250',
        'contact_number' => 'required|digits:11']);

    try {
        if (!Session::has('cart')) {
            return view('cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice + 100;
        $user = Auth::id();
            $pay = Payment::create([
            'user_id' => $user,
            'card_name' => $request->card_name,
            'card_number' => $request->card_number,
            'card_expiry_month' => $request->card_expiry_month,
            'card_expiry_year' => $request->card_expiry_year, 
            'cvc' => $request->cvc,
            'amount' => $total
        ]);

        $order = Order::create([
            'user_id' => $user,
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'contact_number' => $request->contact_number, 
            'cart' => serialize($cart)
        ]);
        Auth::user()->orders()->save($order);
        if (!is_null($pay)){
            Session::forget('cart');
            return redirect()->route('products')->with('success', 'Successfully purchased products!');
        } else {
            throw new Exception('Unable to place your order.');
        }

    } catch (Exception $e) {
        Session::flash('error', 'Something went wrong, please try again later.');
    }


    return redirect('/check-out');
}
}