	@extends('layout.app')
	@section('title', 'Guardian')
	@section('content')

	<h2>Edit</h2>
	<form action="/guardians/update/{{ $guardian->id }}" method="POST">
		@csrf
		@method('PUT')
		<table>

			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="name" value="{{ old('name', $guardian->name) }}"></td>
			</tr>
			<tr>
				<td>Nik</td>
				<td>:</td>
				<td><input type="number" name="nik" value="{{ old('nik', $guardian->nik) }}"></td>
			</tr>
			<tr>
				<td>Nomer HP</td>
				<td>:</td>
				<td><input type="number" name="phone" value="{{ old('phone', $guardian->phone) }}"></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>:</td>
				<td>
					<input type="radio" name="gender" value="l" {{ old('gender', $guardian->gender == 'l' ? 'checked' : null) }}>
					<input type="radio" name="gender" value="p" {{ old('gender', $guardian->gender == 'p' ? 'checked' : null) }}>
				</td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td>:</td>
				<td><input type="date" name="birth_date" value="{{ old('birth_date', $guardian->birth_date) }}"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><textarea name="address">{{ old('address', $guardian->address) }}</textarea></td>
			</tr>
			<tr>
				<td>Orang Tua</td>
				<td>:</td>
				<td>
					<input type="radio" name="is_parent" value="1" {{ old('is_parent', $guardian->is_parent ? 'checked' : '') }}>
					<input type="radio" name="is_parent" value="1" {{ old('is_parent', $guardian->is_parent ? '' : 'checked') }}>
				</td>
			</tr>
		</table>
		<button>Update</button>
	</form>
@endsection