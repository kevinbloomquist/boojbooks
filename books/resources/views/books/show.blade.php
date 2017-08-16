@extends('layouts.app')
@section('main')

<h1>{{$book->name}}</h1>
<ul>

	<li>Id: {{$book->id}}</li>
	<li>Title: {{$book->title}}</li>
	<li>Author: {{$book->author}}</li>
	<li>Cover URL: {{$book->cover_url}}</li>

</ul>
    
@endsection