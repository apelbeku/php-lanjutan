<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Edit</h2>
	<form action="/smartphones/update/{{ $smartphone->id }}" method="POST">
		@csrf @method('PUT')
		<table>
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><input type="text" name="name" value="{{ $smartphone->name }}"></td>
			</tr>
			<tr>
				<td>Price</td>
				<td>:</td>
				<td><input type="number" name="price" value="{{ $smartphone->price }}"></td>
			</tr>
			<tr>
				<td>Stock</td>
				<td>:</td>
				<td><input type="number" name="stock" value="{{ $smartphone->stock }}"></td>
			</tr>
		</table>
		<button>Submit</button>
	</form>
</body>
</html>