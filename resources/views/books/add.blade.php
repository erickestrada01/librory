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
				<li class="list-group-item"><a href="{{ route('books.list') }}">Books</a></li>
				<li class="list-group-item"><a href="{{ route('books.add') }}">Add Book</a></li>
			</ul>
		</div>
		<div class="col-md-10">
			<div class="panel panel-default">
				<div class="panel-heading">{{ $pageTitle }}</div>

				<div class="panel-body">

					<div class="row">
						<div class="col-md-12">

							<form action="add" method="post">
								<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
								<div class="form-group">
									<label for="ab-title">Title</label>
									<input type="text" class="form-control" id="ab-title" name="ab-title" placeholder="">
								</div>
								<div class="form-group">
									<label for="ab-author">Author</label>
									<select class="form-control" name="ab-author">
										@foreach ($authors as $author)
										<option value="{{ $author->id }}">{{ $author->last_name }}, {{ $author->first_name }}</option>
										@endforeach
									</select>
								</div>
								<div class="form-group">
									<label for="ab-publishing_year">Publishing Year</label>
									<input type="text" class="form-control" id="ab-publishing_year" name="ab-publishing_year" placeholder="">
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
