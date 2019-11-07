<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Checkout;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    function updateStatus(){
 

        $newCheckout = new Checkout();

        $newCheckout->user_id = Auth::user()->id;
        $newCheckout->book_id = request('id');
        $newCheckout->checkout = date("Y-m-d");
        $newCheckout->duedate = date("Y-m-d");

        $newCheckout->save();

        $latestCheckout = \DB::table('checkouts')->latest()->get();
        $userCheckout = \DB::table('users')
            ->where('id' , $newCheckout->user_id)
            ->get('first_name');
        dd($userCheckout);

        return view ('checkout', ['newCheckout'=> $latestCheckout]);
    }
}
