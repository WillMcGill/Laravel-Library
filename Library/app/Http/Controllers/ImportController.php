<?php

namespace App\Http\Controllers;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use App\Book;

use Illuminate\Http\Request;

class ImportController extends Controller
{
    function importBooks(){

        $client = new Client();
        $result = $client->get('https://www.googleapis.com/books/v1/volumes?q=flowers+inauthor:keyes&key=AIzaSyByTmfRS8z0kdW8_vlD2-bRkAzX4XJU3Ww');
      
        $books = json_decode($result->getBody()->getContents())->items;
        //dd($books);

        foreach($books as $newBook){
            
           
        $book = new Book();
        $book->title = $newBook->volumeInfo->title;

        if ($newBook->volumeInfo->authors[0] == null){

            $book->author = "unknown";
        }
        else 
        {
            $book->author = $newBook->volumeInfo->authors[0];
        };

        if (isset($newBook->volumeInfo->categories[0])){

        $book->genre = $book->genre = $newBook->volumeInfo->categories[0];
        }
        else
        {
            $book->genre = 'unknown';
        }
        
        
        $book->save();
        }
    }
}
