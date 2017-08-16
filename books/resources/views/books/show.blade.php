@extends('layouts.app')
@section('main')

<h1>{{$book->name}}</h1>
<ul>

	<li>Id: {{$farm->id}}</li>
	<li>Title: {{$farm->title}}</li>
	<li>Author: {{$farm->author}}</li>
	<li>Cover URL: {{$farm->cover_url}}</li>

</ul>
    
@endsection