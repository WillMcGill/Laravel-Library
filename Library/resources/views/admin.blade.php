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
                            <th scope="col">Title</th>
                            <th scope="col">Card Holder</th>
                            <th scope="col">Checkout Date</th>
                            <th scope="col">Due Date</th>
                            <th score="col">Return Book</th>
                        </thead>
                        @foreach ($data as $book)
                        <tr>
                            <td>{{$book->book_id}}</td>
                            <td>{{$book->user_id}}</td>
                            <td>{{$book->checkout}}</td>
                            <td>{{$book->duedate}}</td>
                            

                            <td><a href = "/admin/{{$book->book_id}}">Check In</a></td>

                        </tr>
                        @endforeach
                  
                    </table>

                        <a href= '/admin'><button>Go Back</button></a>
                </div>
            </div>
        </div>
        
    </div>
    
</div>
@endsection