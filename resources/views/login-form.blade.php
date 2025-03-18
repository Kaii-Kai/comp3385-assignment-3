@extends('layouts.app')

@section('content')
<div class ="container ">
	<h1 class="display-5 fw-bold text-body-emphasis text-center">Login</h1>
	
	@if (session()->has(;success'))
		<div class="alert alert-success">
			{{ session()->get('success') }}
		</div>
	@endif
	
	@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
	
	<form action="/login" method="POST">
		@csrf
		<div class="form-group">
			<label for= "mail"> Email: </label>
			<input type="email" class="form-control" id="mail" name="email" required placeholder="Enter email"> <br></br>
		</div>
		<div class="form-group">
			<label for= "password"> Password: </label>
			<input type="password" id="password" class="form-control" name="password" required placeholder="Enter password"> <br></br>
		</div>
		<button type="submit" class="btn btn-primary">SIGN IN</button>
	</form>
</div>
@endsection