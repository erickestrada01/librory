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
                <div class="panel-heading">Books</div>

                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Publishing Year</th>
                            </tr>
                        </thead>
                    @foreach($books as $book)
                        <tr>
                            <td>
                                <a href="{{ route('books.details', ['bookID' => $book->id]) }}" title="">
                                    <strong>{{ $book->title }}</strong>
                                </a>
                            </td>
                            <td>{{ $book->author }}</td>
                            <td>{{ $book->publishing_year }}</td>
                        </tr>
                    @endforeach
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
