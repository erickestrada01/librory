@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default">
                <div class="panel-heading">Books</div>

                <div class="panel-body">
                    @foreach($books as $book)
                        {{ $book->title }} - {{ $book->author }} / {{ $book->publishing_year }}<br />
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
