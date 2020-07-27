<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<h1>Login</h1>
	<form method="POST" action="/login-process">
		@csrf
		<label>
			Email
			<input type="email" name="email">
		</label>
		<label>
			Pasword
			<input type="password" name="password">
		</label>
		<br><br>
		<button>Login</button>
		<button><a href="/register">Register</a></button>
	</form>

</body>
</html>