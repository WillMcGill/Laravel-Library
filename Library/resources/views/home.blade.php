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
                        <input type="text" name="title">
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
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add A Book</div>

                <div class="card-body">
                   

                    <form action="submit\{title}{author}{genre}">
                        Title:<br>
                        <input type="text" name="title" required>
                        <br>
                        Author:<br>
                        <input type="text" name="author" required>
                        <br>
                        Genre:
                        <br>
                        <input type="text" name="genre" required>
                        <br><br>
                        <input type="submit" value="Submit">
                      </form> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
