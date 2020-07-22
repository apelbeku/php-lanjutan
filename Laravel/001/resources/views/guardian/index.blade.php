<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h1>Data Wali</h1>

	<table border="1" style="width:100%;color: green;">
		<th>
			<tr>
				<th>Nama</th>
				<th>Nik</th>
				<th>Nomor HP</th>
				<th>Gender</th>
				<th>Tanggal Lahir</th>
				<th>Almat</th>
				<th>Orang Tua</th>
			</tr>
		</th>

		<tbody>
			@foreach($guardians as $guardian)
				<tr>
					<td>{{ $guardian->name }}</td>
					<td>{{ $guardian->nik }}</td>
					<td>{{ $guardian->phone }}</td>
					<td>{{ $guardian->gender == 'l' ? 'Laki-laki' : 'Perempuan' }}</td>
					<td>{{ $guardian->birth_date }}</td>
					<td>{{ $guardian->address }}</td>
					<td>{{ $guardian->is_parent ? 'Iya' : 'Tidak' }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>

</body>
</html>