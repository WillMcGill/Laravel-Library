<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    function admin(){
        $data = \DB::table('checkouts')->get();
        return view ('admin', ['data'=>$data]);
    }

    function returnBook(){
        
        DB::table('books')->where('id', request('id'))
        ->update(['enabled'=> null]);

        DB::table('checkouts')->where('book_id', request('id'))
        ->delete();

    $data = DB::table('books')->where('id', request('id'))->get();
    
    

        return view('return', ['book'=> $data[0]->title]);
    }
}
