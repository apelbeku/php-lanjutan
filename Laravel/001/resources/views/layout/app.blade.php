<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
</head>
<body>

	<nav>
		<a href="/guardians">Guardians</a> |
		<a href="/students">Students</a>
	</nav>

	<hr>

	@yield('content')

</body>
</html>