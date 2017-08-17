@extends('layouts.app')
@section('main')

<h1>{{$book->name}}</h1>
<ul>
	<!-- once built out change width/height to responsive values for final layout -->
	<img src = "{{$book->cover_url}}" width = "300px" height = "400px" alt = "Sweet Book Pic Goes Here!">
	<h2>Title: {{$book->title}}</h2>
	<h3>Author: {{$book->author}}</h3>
	<p>Publication Date: {{$book->pub_date}}</p>
	<p>DB id: {{$book->id}}</p>


</ul>
    
@endsection