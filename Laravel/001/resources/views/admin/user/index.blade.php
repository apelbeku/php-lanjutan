<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	@php
		$id=4367;
	 @endphp
	<div><a href="{{ route('admin.users.create') }}">User Create</a></div>

	<div>
		<form method="POST" action="{{ route('admin.users.store') }}">
			@csrf
			<button>user Store</button>
		</form>
	</div>
	
	<div><a href="{{ route('admin.users.edit', ['user' => $id]) }}">User Edit</a></div>
	
	<div>
		<form method="POST" action="{{ route('admin.users.update', $id) }}">
			@csrf
			@method('PUT')
			<button>user Update</button>
		</form>
	</div>
	
	<div>
		<form method="POST" action="{{ route('admin.users.destroy', $id) }}">
			@csrf
			@method('DELETE')
			<button>user Delete</button>
		</form>
	</div>
</body>
</html>