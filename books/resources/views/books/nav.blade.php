@section('nav')

<nav class="nav navbar-light bg-faded">
	<span class="navbar-brand">BB</span>
	<a class = "nav-link" href= "{{ route('books.index') }}">All Books</a>
	<a class = "nav-link" href= "{{ route('books.create') }}">Add a book</a>
</nav>

@endsection