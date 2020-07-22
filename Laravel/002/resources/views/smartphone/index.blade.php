<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<table border="1" style="width: 100%">
		<thead>
			<tr>
				<th>Name</th>
				<th>Price</th>
				<th>Stock</th>
			</tr>
		</thead>

		<tbody>
			@foreach($smartphones as $smartphone)
				<tr>
					<td>{{ $smartphone->name }}</td>
					<td>{{ $smartphone->price }}</td>
					<td>{{ $smartphone->stock }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>

</body>
</html>