<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Charge;
use Stripe\Stripe;
use Cart;
use Mail;
use Session;

class CheckoutController extends Controller
{
    public function index()
    {
    	if(Cart::content()->count()===0){
    		Session::flash('info', 'Your cart is still empty');
    		return redirect()->back();
    	}

    	return view('checkout');
    }


    public function pay()
    {

    	Stripe::setApiKey("sk_test_1LvhhOvGGRQZsHwlDXQzNZ90");

    	$charge = Charge::create([
    		'amount'=> Cart::total() * 100,
    		"currency" => "usd",
			"description" => "course practice",
			"source" => request()->stripeToken

    	]);

    	Session::flash('success','Purchase successfull. Wait for our email');

    	Cart::destroy();

    	Mail::to(request()->stripeEmail)->send(new \App\Mail\PurchaseSuccessful);

    	return redirect('/');
    }

}
