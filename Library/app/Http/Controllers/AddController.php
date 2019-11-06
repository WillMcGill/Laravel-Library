<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddController extends Controller
{
    function writeData(){
        //echo ('hello world');
        $title = request('title');
        $author = request('author');
        $genre = request('genre');

        echo ($title);
        echo ($author);
        echo ($genre);


        return view('submit');
    }
}
