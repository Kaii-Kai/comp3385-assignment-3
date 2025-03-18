@extends('layouts.app')

@section('content')
<div class ="container ">
	<h1 class="display-5 fw-bold text-body-emphasis text-center">Create Client</h1>
	
	@if (session()->has('success'))
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
	
	<form action="{{ url('/clients') }}" method="POST" enctype="multipart/form-data">
		@csrf
		<div class="form-group">
			<label for= "name"> Name: </label>
			<input type="text" class="form-control" id="name" name="name" required/> br></br>
		</div>
		<div class="form-group">
			<label for= "mail"> Email: </label>
			<input type="email" class="form-control" id="mail" name="email" required/> <br></br>
		</div>
		<div class="form-group">
			<label for= "phone"> Phone: </label>
			<input type="tel" id="phone" class="form-control" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required/> 
			<small class="text-muted">Format: xxx-xxx-xxxx</small>
			<br></br>
		</div>
		<div class="form-group">
			<label for= "address"> Address: </label>
			<textarea name="address" class="form-control" id="address" placeholder="3385 Antigua Ave, Five Islands Village, Antigua & Barbuda"  required/> <br></br>
		</div>
		<div class="form-group">
			<label for= "company_logo"> Company Logo: </label>
			<input type="file" class="form-control" id="company_logo" name="company_logo" required/> 
			<small class="text-muted">Only image files (e.g. jpg, png) are allowed and files must be less than 2MB.</small>
			<br></br>
		</div>
		<button type="submit" class="btn btn-primary">Create</button>
	</form>
</div>
@endsection