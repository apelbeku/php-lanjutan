<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="/smartphone/store" method="POST">
		@csrf
		<table>
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Price</td>
				<td>:</td>
				<td><input type="number" name="price"></td>
			</tr>
			<tr>
				<td>Stock</td>
				<td>:</td>
				<td><input type="number" name="stock"></td>
			</tr>
		</table>
		<button>Submit</button>
	</form>
</body>
</html>