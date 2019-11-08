@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Search For A Book</div>

                <div class="card-body">
                   

                    <form action="data\">
                        Title:<br>
                        <input type="text" name="title" >
                        <br>
                        Author:<br>
                        <input type="text" name="author">
                        <br><br>
                        <input type="submit" value="Submit">
                      </form> 
                </div>
            </div>
        </div>
    </div>


    
    <div class="row justify-content-center">
            <div class="row justify-content-center ">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add A Book</div>

                <div class="card-body">
                   
                    
                    <form action="submit\{title}{author}{genre}">
                        Title:<br>
                        <input type="text" name="title" required value="{{old('title') }}">
                        <br>
                        Author<br>
                        <input type="text" name="author" required value="{{old('author') }}">
                        <br>
                        Genre:
                        <br>
                        <input type="text" name="genre" required value="{{old('genre') }}">
                        <br><br>
                        <input type="submit" value="Submit">
                      </form> 
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Admin</div>
    
                    <div class="card-body">
                       
                        <form action="admin\">
                            <input type="submit" value="Check In">
                        </form> 

                        <form action="/import">
                           
                                <a href = "/data"><input type="submit" value="Import Books"></a>
                            
                        </form> 
                    </div>
                </div>
            </div>
        </div>
</div>

@endsection
