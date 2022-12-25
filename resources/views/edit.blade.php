@extends('layouts.app')

@section('content')

	<div class="container">
		@if (Session:: has('message'))
		<div class="alert alert-success alert-block">
		  <button type="button" class="close" data-dismiss="alert">×</button>	
		<strong>{{ session('message')}}</strong>
		</div>
        @endif
		<form action="/todo/{{ $todo->id }}" method="post" enctype="multipart/form-data">
			@csrf
			@method("PATCH")
		<div class="form-group">
		<label for="title">Title</label>
		<input type="text" name="title" id="title" class="form-control" value="{{ $todo->title }}">
		</div>

		<div class="form-group">
		<label for="content">content</label>
		<textarea name="content" id="content" class="form-control">{{ $todo->content }}</textarea> 
		</div>

		<div class="form-group">
		<label for="reason">reason</label>
		<textarea name="reason" id="reason" class="form-control">{{ $todo->reason }}</textarea> 
		</div>

		 <button type="submit" class="btn btn-primary">Update</button>
	</form>
	</div>
@endsection