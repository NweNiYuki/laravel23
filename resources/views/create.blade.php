@extends('layouts.app')

@section('content')

<div class="container">
	<div class="jumbotron">
		<form action="/todo" method="post" enctype="multipart/form-data">
			@csrf
		<div class="form-group">
		<label>Title</label>
		<input type="text" name="title" class="form-control" required>
		</div>
		
		<div class="form-group">
		<label>Content</label>
		<textarea type="text" name="content" class="form-control"></textarea>
		</div>

		<div class="form-group">
		<label>Reason</label>
		<textarea type="text" name="reason" class="form-control"></textarea>
		</div>

	
		<input class="btn btn-primary" type="submit" value="Add New">


	</form>
	</div>

</div>


@endsection