@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-2">
            <ul class="list-group">
                <li class="list-group-item"><a href="{{ route('books.list') }}">Books</a></li>
                <li class="list-group-item"><a href="{{ route('books.add') }}">Add Book</a></li>
            </ul>
        </div>
        <div class="col-md-10">
            <div class="panel panel-default">

                <div class="panel-body">

                    <div class="row">
                        <div class="col-md-12">

                            <h2 style="margin-top: 5px;">{{ $book->title }} ({{ $book->publishing_year }})</h2>
                            <h4>by {{ $book->author }}</h4>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
