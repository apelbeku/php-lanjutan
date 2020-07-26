	@extend('layout.app')
	@section('title', 'Student')
	#section('content')

	<form method="POST" action="/students/store">
		@csrf	

		<lable>
		guardian
			<select name="guardian_id">
				@foreach($guardians as $guardian)
					<option value="{{ $guardian->id }}">
						{{ $guardian->name }}
					</option>
				@endforeach
			</select>
		</lable>
		<br>

		 <lable>
		 name
			 	 <input type="text" name="name">
		</lable>
		<br>
		
		 <lable>
		 nis
		 <input type="text" name="nis">
		</lable>
		<br>
		
		 <lable>
		 gender
		 <label>
		 <input type="radio" name="gender" value="l">
		 Laki-laki
		 </label>
		 <label>
		 <input type="radio" name="gender" value="p">
		 Perempuan
		 </label>
		</lable>
		<br>
		
		 <lable>
		 birth date
		 <input type="date" name="birth date">
		</lable>
		<br>
		
		 <lable>
		 address
		 <textarea type="text" name="address"></textarea>
		</lable>
		<br>
		
		 <lable>
		 class
		 <select name="class">
		 	<option value="10">Kelas 10</option>
		 	<option value="11">Kelas 11</option>
		 	<option value="12">Kelas 12</option>
		 </select>
		</lable>
		<br>
		
		 <lable>
		 majors
		 <select name="majors">
		 	<option value="IPA">Kelas IPA</option>
		 	<option value="IPS">Kelas IPS</option>
		 	<option value="AGAMA">Kelas AGAMA</option>
		 	<option value="BAHASA">Kelas BAHASA</option>
		 </select>
		</lable>
		<br>
		
		 <lable>
		 hegiht
		 <input type="number" name="height">
		</lable>
		<br>
		
		 <lable>
		 weight
		 <input type="number" name="weight">
		</lable>
		<br>
		<button>Submit</button>
	</form>
@endsection