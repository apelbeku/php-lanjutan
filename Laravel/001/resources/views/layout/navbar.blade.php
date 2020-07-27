<nav>
	<span>{{ auth()->check() ? auth()->user()->name : '-' }}</span> ||
	<a href="/">home</a>
	<a href="/guardians">The Guardians</a>
	<a href="/studentss">student</a> ||

	<form method="POST" action="/logout">
		@csrf
		<button>Logout</button>
	</form>
</nav>