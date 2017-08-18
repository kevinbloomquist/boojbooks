@extends('layouts.app')
@section('main')

<div class= "card">
<h1>{{$book->name}}</h1>
<ul>
	<!-- once built out change width/height to responsive values for final layout -->
	<img src = "{{$book->cover_url}}" width = "300px" height = "400px" alt = "Sweet Book Pic Goes Here!">
	<h2>Title: {{$book->title}}</h2>
	<h3>Author: {{$book->author}}</h3>
	<p>Publication Date: {{$book->pub_date}}</p>
	<p>DB id: {{$book->id}}</p>


</ul>
       <form action="{{ url('books/'.$book->id) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}

            <button type="submit" class="btn btn-danger">
             Delete
            </button>
             <a class="btn btn-primary" href="{{ route('books.edit',$book) }}">Edit this book</a>
        </form>
</div>
    
@endsection