@extends('layouts.master')
@section('header-home')
  @include('layouts.header-home')
@section('content')	
	<h1>Sign in</h1>
	@include('layouts.errors')
	<form method="POST" action="/login">
			{{csrf_field()}}
		<div class="form-group">
			<label for="email">E-mail :</label>
			<input type="email" class="form-control" name="email" required>
		</div>
		<div class="form-group">
			<label for="password">Password :</label>
			<input type="password" class="form-control" name="password" required>
		</div>					
		<button type="submit" class="btn btn-success">Sign in</button>		
	</form> 
@endsection