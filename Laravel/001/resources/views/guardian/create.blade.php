<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<body>

	<form action="/guardians/store" method="POST">
		@csrf
		<table>

			<h1>Form Wali</h1>

			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Nik</td>
				<td>:</td>
				<td><input type="number" name="nik"></td>
			</tr>
			<tr>
				<td>Nomer HP</td>
				<td>:</td>
				<td><input type="number" name="phone"></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>:</td>
				<td>
					<input type="radio" name="gender" value="l">
					<input type="radio" name="gender" value="p">
				</td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td>:</td>
				<td><input type="date" name="birth_date"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><textarea name="address"></textarea></td>
			</tr>
			<tr>
				<td>Orang Tua</td>
				<td>:</td>
				<td>
					<input type="radio" name="is_parent" value="1">
					<input type="radio" name="is_parent" value="1">
				</td>
			</tr>
		</table>
		<button>Submit</button>
	</form>

</body>
</html>