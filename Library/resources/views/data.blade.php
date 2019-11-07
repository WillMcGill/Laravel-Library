@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Search Results</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>

                    @endif
                    <table class="table">
                        <thead>
                            <th scope="col">Book ID</th>
                            <th scope="col">Title</th>
                            <th scope="col">Author</th>
                            <th scope="col">Genre</th>
                            <th scope="col">Status</th>
                        </thead>
                        @foreach ($data as $book)
                        <tr>
                            <td>{{$book->id}}</td>
                            <td>{{$book->title}}</td>
                            <td>{{$book->author}}</td>
                            <td>{{$book->genre}}</td>

                            @if ($book->enabled == null)

                            <td><a href = "/checkout/{{$book->id}}">Check Me Out</a></td>
                            
                            @else

                            <td>Checked Out</td>

                            @endif
                            

                        </tr>
                        @endforeach
                  
                    </table>

                        <a href= '/home'><button>Go Back</button></a>
                </div>
            </div>
        </div>
        
    </div>
    
</div>
@endsection