@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Courses</div>

                <div class="panel-body">
                    <!--plural as singlar  -->
                    @foreach($courses as $course)
                    {{ $course->label }} - {{ $course->abbreviation }}<br/>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
