	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	</head>
	<body>
		<a href="/smartphones/create">Tambah</a>
		<table border="1" style="width: 100%">
			<thead>
				<tr>
					<th>Name</th>
					<th>Price</th>
					<th>Stock</th>
					<th>Action</th>
				</tr>
			</thead>

			<tbody>
				@foreach($smartphones as $smartphone)
					<tr>
						<td>{{ $smartphone->name }}</td>
						<td>{{ $smartphone->price }}</td>
						<td>{{ $smartphone->stock }}</td>
						<td>
							<button>
							<a href="/smartphones/edit/{{ $smartphone->id }}">Edit</a>
							<form action="/smartphones/delete/{{ $smartphone->id }}" method="POST">
								@csrf @method('delete')
								<button>Delete</button>
							</form>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>

	</body>
	</html>