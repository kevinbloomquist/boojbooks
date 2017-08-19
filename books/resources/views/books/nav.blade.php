@section('nav')

<nav class="navbar navbar-light bg-faded">
	<span class="navbar-brand">BB</span>
	<a class = "nav-link" href= "{{ route('books.index') }}">All Books</a>
	<a class = "nav-link" href= "{{ route('books.create') }}">Add a book</a>
	<a class = "nav-link" href="#">Sort ( change to drop down)</a>
</nav>

@endsection