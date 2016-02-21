@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2">
            <ul class="list-group">
                <li class="list-group-item"><a href="{{ route('authors.list') }}">Authors</a></li>
                <li class="list-group-item"><a href="{{ route('authors.add') }}">Add Author</a></li>
            </ul>
        </div>
        <div class="col-md-10">

            <div class="panel panel-default">
                <div class="panel-heading">{{ $pageTitle }} ({{ $authorsCount }})</div>

                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Location</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                    @forelse($authors as $author)
                        <tr>
                            <td>{{ $author->last_name }}, {{ $author->first_name }} ({{ $author->birthdate }})</td>
                            <td>{{ $author->location }}</td>
                            <td>{{ $author->description }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" style="text-align: center;">No Author</td>
                        </tr>
                    @endforelse
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
