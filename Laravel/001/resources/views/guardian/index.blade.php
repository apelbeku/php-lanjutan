	@extends('layout.app')
	@section('title', 'Guardian')
	@section('content')

	<h1>Data Wali</h1>

	<a href="/guardians/create">Tambah</a>
	<table border="1" style="width:100%;color: green;">
			<tr>
				<th>Nama</th>
				<th>Nik</th>
				<th>Nomor HP</th>
				<th>Gender</th>
				<th>Tanggal Lahir</th>
				<th>Almat</th>
				<th>Orang Tua</th>
				<th>Students</th>
				<th>Created At</th>
				<th>Action</th>
			</tr>

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
					<td>{{ $guardian->students()->count() }}</td>
					<td>{{ $guardian->created_at }}</td>
					<td>
						<button>
							
						<a href="/guardians/edit/{{ $guardian->id }}">Edit</a>
						
						</button>
						<form action="/guardians/delete/{{ $guardian->id }}" method="POST">
							@csrf @method('delete')
							<button>Delete</button>
						</form>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection
