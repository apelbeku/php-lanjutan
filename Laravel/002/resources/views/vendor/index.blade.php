	@extends('layout.app')
	@section('title', 'vendor')
	@section('content')
	<a href="vendors/create">Tambah</a>
		<table border="1" style="width: 100%">
			<thead>
				<tr>
					<th>Name</th>
				</tr>
			</thead>

			<tbody>
				@foreach($vendors as $vendor)
					<tr>
						<td>{{ $vendor->smartphone->name }}</td>
						<td>{{ $vendor->name }}</td>
						<td>
							<button>
							<a href="/vendors/edit/{{ $vendor->id }}">Edit</a>
							<form action="/vendors/delete/{{ $vendor->id }}" method="POST">
								@csrf @method('delete')
								<button>Delete</button>
							</form>
						</td>
					</tr>
					@endforeach
			</tbody>
		</table>
		@endsection