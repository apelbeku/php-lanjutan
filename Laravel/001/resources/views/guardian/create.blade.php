	@extends('layout.app')
	@section('title', 'Guardian')
	@section('content')

	<form action="/guardians/store" method="POST">
		@csrf
		<table>

			<h1>Form Wali</h1>

			@if($errors->any())
				<br>
					<ul>
						@foreach($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				<br>
			@endif

			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="name" value="{{ old('name') }}"></td>
			</tr>
			<tr>
				<td>Nik</td>
				<td>:</td>
				<td><input type="number" name="nik" value="{{ old('nik') }}"></td>
			</tr>
			<tr>
				<td>Nomer HP</td>
				<td>:</td>
				<td><input type="number" name="phone" value="{[ old('phone') }]"></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>:</td>
				<td>
					<input type="radio" name="gender" value="l" {{ old('gender') == 'l' ? 'checked' : null }}>Laki-laki
					<input type="radio" name="gender" value="p" {{ old('gender') == 'p' ? 'checked' : null }}>Perempuan
				</td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td>:</td>
				<td><input type="date" name="birth_date" value="{{ old('birth_date') }}"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><textarea name="address">{{ old('address') }}</textarea></td>
			</tr>
			<tr>
				<td>Orang Tua</td>
				<td>:</td>
				<td>
					<input type="radio" name="is_parent" value="1" {{ old('is_parent') === '1' ? 'checked' : null }}>Kandung
					<input type="radio" name="is_parent" value="1" {{ old('is_parent') === '0' ? 'checked' : null}}>Tiri
				</td>
			</tr>
		</table>
		<button>Submit</button>
	</form>
@endsection