@extends('layouts.master')

@section('header-home')

  @include('layouts.header-home')

@endsection

@section('content')	

	@include('layouts.errors')

	<form method="POST" action="/post">

			{{csrf_field()}}

		<div class="form-group">

			<label for="title">Title :</label>

			<input type="text" class="form-control" name="title" placeholder="Title">

		</div>

		<div class="form-group">

			<label for="title">Content :</label>

			<textarea class="form-control" name="content" placeholder="Content"></textarea>

		</div>					

		<button type="submit" class="btn btn-success">Publish</button>				

	</form>     		

@endsection