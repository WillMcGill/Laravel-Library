@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">You've Successfully Added A New Book!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        {{ $book }}
                        <br><br><br>
                        
                        <a href= '/home'><button>Go Back</button></a>
                </div>
            </div>
        </div>
        
    </div>
    
</div>
@endsection