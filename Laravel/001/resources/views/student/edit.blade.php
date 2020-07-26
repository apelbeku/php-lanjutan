	@extends('layout.app')
	@section('title', 'Student')
	@section('content')

	<form method="POST" action="/students/update/{{ $student->id }}">
		@csrf	
		@method('PUT')
		<label>
		guardian id
		<input type="text" name="guardian_id" value="{{ $student->guardian_id }}">
		</label>
		<br>

		 <label>
		 name
			 	 <input type="text" name="name" value="{{ $student->name }}">
		</label>
		<br>
		
		 <label>
		 nis
		 <input type="text" name="nis" value="{{ $student->nis }}">
		</label>
		<br>
		
		 <label>
		 gender
		 <label>
		 <input type="radio" name="gender" {{ $student->gender == 'l' ? 'checked' : null}} value="l">
		 Laki-laki
		 </label>
		 <label>
		 <input type="radio" name="gender" {{ $student->gender == 'p' ? 'checked' : null}} value="p">
		 Perempuan
		 </label>
		</label>
		<br>
		
		 <label>
		 birth date
		 <input type="date" name="birth  value="{{ $student->birth_date }}">
		</label>
		<br>
		
		 <label>
		 address
		 <textarea type="text" name="address">
		 	{{ $student->address }}
		 </textarea>
		</label>
		<br>
		
		 <label>
		 class
		 <select name="class">
		 	<option value="10" {{ $student->class == '10' ? 'selected' : null }}>class 10</option>
		 	<option value="11" {{ $student->class == '11' ? 'selected' : null }}>class 11</option>
		 	<option value="12" {{ $student->class == '12' ? 'selected' : null }}>class 12</option>
		 </select>
		</label>
		<br>
		
		 <label>
		 majors
		 <select name="majors">
		 	<option value="ipa" {{ $student->majors == 'IPA' ? 'selected' : null}}>Kelas IPA</option>
		 	<option value="ips" {{ $student->majors == 'IPS' ? 'selected' : null}}>Kelas IPS</option>
		 	<option value="agama" {{ $student->majors == 'AGAMA' ? 'selected' : null}}>Kelas AGAMA</option>
		 	<option value="bahasa" {{ $student->majors == 'BAHASA' ? 'selected' : null}}>Kelas BAHASA</option>
		 </select>
		</label>
		<br>
		
		 <label>
		 height
		 <input type="number" name="height" value="{{ $student->height }}">
		</label>
		<br>
		
		 <label>
		 weight
		 <input type="number" name="weight" value="{{ $student->weight }}">
		</label>
		<br>
		<button>Submit</button>
	</form>
@endsection