<nav>
	<span>{{ auth()->check() ? auth()->user()->name : '-' }}</span>
	<a href="/">Home</a>
	<a href="/smartphones">Smartphones</a>
	<a href="/vendors">Vendors</a>

	<form method="POST" action="/logout">
		@csrf
		<button>Logout</button>
	</form>
</nav>