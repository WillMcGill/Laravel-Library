<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetBooksController extends Controller{

    function getData(){
        $data = \DB::table('books')->get();
        dd($data);
    }
}

// getData();

// function data(){
        
//     return view('data');

// }
