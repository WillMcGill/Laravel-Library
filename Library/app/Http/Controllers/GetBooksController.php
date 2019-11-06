<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetBooksController extends Controller{

    function getData(){

        $title = request('title');
        $author = request('author');

        if (!$author){
            $data = \DB::table('books')->where('title','like', $title)->get();
        }

        if (!$title){
            $data = \DB::table('books')->where('author','like', $author)->get();
        }
    
        else{
            $data = \DB::table('books')->where('author','like', $author)
            ->where('title','like', $title)
            ->get();
        }
        
        //dd($data);
    
        return view('data', [
            'data'=>$data
        ]);
    
}
}

// getData();

// function data(){
        
//     return view('data');

// }
