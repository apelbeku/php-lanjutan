	@extends('layout.app')
	@section('title', 'vendor')
	@section('content')

	<form method="POST" action="/vendors/store">
		@csrf	

		<label>
		Smartphone
			<select name="smartphone_id">
				@foreach($smartphones as $smartphone)
					<option value="{{ $smartphone->id }}">
						{{ $smartphone->name }}
					</option>
				@endforeach
			</select>
		</label>
		<br>

		 <label>
		 name
			 	 <input type="text" name="name">
		</label>
		<br>
		<button>Submit</button>
	</form>
@endsection