<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Checkout;

use Illuminate\Http\Request;

use DB;

class CheckoutController extends Controller
{
    function updateStatus(){
 //make sure book isnt already checked out

        $newCheckout = new Checkout();

        $newCheckout->user_id = Auth::user()->id;
        $newCheckout->book_id = request('id');
        $newCheckout->checkout = date("Y-m-d");
        $newCheckout->duedate = date("Y-m-d");

        $newCheckout->save();

        DB::table('books')->where('id', request('id'))
        ->update(['enabled'=> 1]);


        $userCheckout = \DB::table('users')
            ->where('id' , $newCheckout->user_id)
            ->pluck('first_name');
       

        $bookCheckout = \DB::table('books')
            ->where('id' , $newCheckout->book_id)
            ->pluck('title');

        return view ('checkout', [  'userCheckout'=> $userCheckout,
                                    'bookCheckout'=> $bookCheckout
                                    ]);
    }

  
}
