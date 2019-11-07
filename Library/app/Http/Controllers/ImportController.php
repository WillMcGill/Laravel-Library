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
        //dd($books->volumeInfo->title);

        foreach($books as $newBook){
            //echo($book->volumeInfo->title);
        $book = new Book();
        $book->title = $newBook->volumeInfo->title;
        $book->author = $newBook->volumeInfo->authors;
        $book->genre = $newBook->volumeInfo->categories;
        
        $book->save();
        }
    }
}
