<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetBooksController extends Controller{

    function getData(){

        $title = request('title');
        $author = request('author');

        if (!$author && $title){
            $data = \DB::table('books')->where('title','like', $title)->get();
        }

        if (!$title && $author){
            $data = \DB::table('books')->where('author','like', $author)->get();
        }
    
        if($title && $author){
            $data = \DB::table('books')->where('author','like', $author)
            ->where('title','like', $title)
            ->get();
        }
        
    
        return view('data', [
            'data'=>$data
        ]);
    
}
}

// getData();

// function data(){
        
//     return view('data');

// }
