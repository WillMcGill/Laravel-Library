<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use App\Book;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = DB::table('users')->where('id' , Auth::user()->id)->get();
        
        return view('home', ['admin'=>$data]);
    }

    function importBooks(){

        $client = new Client();
        

        $int = rand(0,51);
        $a_z = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $rand_letter = $a_z[$int];

        $result = $client->get('https://www.googleapis.com/books/v1/volumes?q=' . $rand_letter . '&key=AIzaSyByTmfRS8z0kdW8_vlD2-bRkAzX4XJU3Ww');
      
        
        $books = json_decode($result->getBody()->getContents())->items;

        
        
        foreach($books as $newBook){
            
           
            $book = new Book();
            $book->title = $newBook->volumeInfo->title;

        if ($newBook->volumeInfo->authors[0] == null){
            $book->author = "unknown";
            }

        else {
            $book->author = $newBook->volumeInfo->authors[0];
             };

        if (isset($newBook->volumeInfo->categories[0])){
            $book->genre = $book->genre = $newBook->volumeInfo->categories[0];
            }

        else{
            $book->genre = 'unknown';
            }
        
        $book->save();
        }
    

        return view('home');
        
    
}
}
