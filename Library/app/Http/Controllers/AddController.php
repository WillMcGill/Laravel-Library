<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class AddController extends Controller
{
    function writeData(){
        //echo ('hello world');
        
       

        $book = new Book();
        $book->title = request('title');
        $book->author = request('author');
        $book->genre = request('genre');
        
        $book->save();

        return view('submit',[
            'book'=>$book
        ]);
    }
}
