<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<body>

	<h2>Edit</h2>
	<form action="/guardians/update/{{ $guardian->id }}" method="POST">
		@csrf
		@method('PUT')
		<table>

			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="name" value="{{ $guardian->name }}"></td>
			</tr>
			<tr>
				<td>Nik</td>
				<td>:</td>
				<td><input type="number" name="nik" value="{{ $guardian->nik }}"></td>
			</tr>
			<tr>
				<td>Nomer HP</td>
				<td>:</td>
				<td><input type="number" name="phone" value="{{ $guardian->phone }}"></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>:</td>
				<td>
					<input type="radio" name="gender" value="l" {{ $guardian->gender == 'l' ? 'checked' : null }}>
					<input type="radio" name="gender" value="p" {{ $guardian->gender == 'p' ? 'checked' : null }}>
				</td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td>:</td>
				<td><input type="date" name="birth_date" value="{{ $guardian->birth_date }}"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><textarea name="address">{{ $guardian->address }}</textarea></td>
			</tr>
			<tr>
				<td>Orang Tua</td>
				<td>:</td>
				<td>
					<input type="radio" name="is_parent" value="1" {{ $guardian->is_parent ? 'checked' : '' }}>
					<input type="radio" name="is_parent" value="1" {{ $guardian->is_parent ? '' : 'checked' }}>
				</td>
			</tr>
		</table>
		<button>Update</button>
	</form>

</body>
</html>