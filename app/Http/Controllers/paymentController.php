<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class paymentController extends Controller
{
    public function pay(){
        // Set your secret key: remember to change this to your live secret key in production
// See your keys here: https://dashboard.stripe.com/account/apikeys
        \Stripe\Stripe::setApiKey("sk_test_skE6xtWOoxPacDtaDGccWVkT");

// Token is created using Checkout or Elements!
// Get the payment token ID submitted by the form:
        $token = $_POST['stripeToken'];
        $price = $_POST['price'];
        $charge = \Stripe\Charge::create([
            'amount' => $price*100,
            'currency' => 'usd',
            'description' => 'Example charge',
            'source' => $token,
        ]);
        return redirect()->back();
    }


}
