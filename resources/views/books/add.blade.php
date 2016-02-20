@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $pageTitle }}</div>

                <div class="panel-body">

                    <div class="row">
                        <div class="col-md-12">

                            <form method="post" action="add">
                                <div class="form-group">
                                    <label for="ab-title">Title</label>
                                    <input type="text" class="form-control" id="ab-title" name="ab-title" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="ab-author">Author</label>
                                    <input type="text" class="form-control" id="ab-author" name="ab-author" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="ab-publishing_year">Publishing Year</label>
                                    <input type="text" class="form-control" id="ab-publishing_year" name="ab_publishing-year" placeholder="">
                                </div>
                                <button type="submit" class="btn btn-default">Submit</button>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
