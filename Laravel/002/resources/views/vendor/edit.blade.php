	@extends('layout.app')
	@section('title', 'Student')
	@section('content')

	<form method="POST" action="/vendors/update/{{ $vendor->id }}">
		@csrf	
		@method('PUT')
		<label>
		smartphone id
		<input type="text" name="smartphone_id" value="{{ $vendor->smartphone_id }}">
		</label>
		<br>

		 <label>
		 name
			 	 <input type="text" name="name" value="{{ $vendor->name }}">
		</label>
		<br>
		<button>Submit</button>
	</form>
@endsection