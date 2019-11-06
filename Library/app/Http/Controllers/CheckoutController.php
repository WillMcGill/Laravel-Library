<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Checkout;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    function updateStatus(){
        
        $bookID = request('id');
        $userID = Auth::user()->id;

        echo ($bookID);
        echo ($userID);

        $newCheckout = new Checkout();

        $newCheckout->user_id = Auth::user()->id;
        $newCheckout->book_id = request('id');
        $newCheckout->checkout = date("Y-m-d");
        $newCheckout->duedate = date("Y-m-d");

        $newCheckout->save();
    }
}
