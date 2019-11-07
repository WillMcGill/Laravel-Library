<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetBooksController extends Controller
{

    function getData()
    {

        $title = request('title');
        $author = request('author');

        if (!$author && $title) {
            $data = \DB::table('books')->where('title', 'like', '%'.$title.'%')->get();
        } else if (!$title && $author) {
            $data = \DB::table('books')->where('author', 'like', '%'.$author.'%')->get();
        } else if ($title && $author) {
            $data = \DB::table('books')->where('author', 'like', '%'.$author,'%')
                ->where('title', 'like', '%'.$title.'%')
                ->get();
        } else {
            $data = \DB::table('books')->get();
        };


        return view('data', [
            'data' => $data
        ]);
    }
}

