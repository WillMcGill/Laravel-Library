@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Search For A Book</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

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
</div>
@endsection
