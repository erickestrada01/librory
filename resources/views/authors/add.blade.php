@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        @if (count($errors) > 0)
        <div class="col-md-12">
            <div class="alert alert-warning">
                <ul style="padding-left: 20px;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        @endif

        <div class="col-md-2">
            <ul class="list-group">
                <li class="list-group-item"><a href="{{ route('authors.list') }}">Authors</a></li>
                <li class="list-group-item"><a href="{{ route('authors.add') }}">Add Author</a></li>
            </ul>
        </div>
        <div class="col-md-10">

            <div class="panel panel-default">
                <div class="panel-heading">{{ $pageTitle }}</div>

                <div class="panel-body">

                    <form action="add" method="post">
                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                        <div class="form-group">
                            <label for="aa-first_name">First Name</label>
                            <input type="text" class="form-control" id="aa-first_name" name="aa-first_name" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="aa-last_name">Last Name</label>
                            <input type="text" class="form-control" id="aa-last_name" name="aa-last_name" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="aa-birthdate">Birthdate</label>
                            <input type="text" class="form-control span2" id="aa-birthdate" name="aa-birthdate" data-date-format="yyyy-mm-dd" data-date="" />
                        </div>
                        <div class="form-group">
                            <label for="aa-location">Location</label>
                            <input type="text" class="form-control" id="aa-location" name="aa-location" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="aa-description">Description</label>
                            <textarea name="aa-description" rows="4" class="form-control" id="aa-description"></textarea>
                        </div>
                        <button type="submit" class="btn btn-default">Add Author</button>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
