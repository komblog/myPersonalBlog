@extends('layouts.master')

@section('header-home')

  @include('layouts.header-home')

@section('content')
	
	<h1>Registration</h1>

	@include('layouts.errors')

	<form method="POST" action="/register">

			{{csrf_field()}}

		<div class="form-group">

			<label for="name">Username :</label>

			<input type="text" class="form-control" name="name" required>

		</div>

		<div class="form-group">

			<label for="email">E-mail :</label>

			<input type="text" class="form-control" name="email" required>

		</div>		

		<div class="form-group">

			<label for="password">Password :</label>

			<input type="password" class="form-control" name="password" required>

		</div>		

		<div class="form-group">

			<label for="password_confirmation">Password Confirmation :</label>

			<input type="password" class="form-control" name="password_confirmation" required>

		</div>						

		<button type="submit" class="btn btn-success">Register</button>				

	</form> 

@endsection