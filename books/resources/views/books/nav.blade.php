@section('nav')

<nav class= "navbar">
	<span class="navbar-brand">BB</span>
	<a href= "{{ route('books.index') }}">All Books</a>
	<a href= "{{ route('books.create') }}">Add a book</a>
	<a href="#">Sort ( change to drop down)</a>
</nav>

@endsection