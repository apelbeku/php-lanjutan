<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>

	<h1>Register</h1>
	<form method="POST" action="/registration-process">
		@csrf
		<label>
			Name
			<input type="text" name="name">
		</label>
		<br><br>
		<label>
			Email
			<input type="email" name="email">
		</label>
		<br><br>
		<label>
			Password
			<input type="password" name="password">
		</label>
		<br><br>
		<button>Register</button>
		<button><a href="/login">Back</a></button>
	</form>

</body>
</html>