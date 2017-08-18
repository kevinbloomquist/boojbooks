@extends('layouts.app')
@section('main')

  <h1>Edit {{$book->title}}</h1>

  <form action="{{route('books.update',$book)}}" method= "POST">
  {{ method_field('PUT') }}

  {{csrf_field()}}
  <input type = "hidden" name= "csrf_token" value= "DaBSErIR...WPPI">
    
    <label for="title">Title</label>
    <input type="text" name="title" placeholder="{{$book->title}}">

    <label for="author">Author</label>
    <input type="text" name="author" placeholder="{{$book->author}}">

    <label for="cover_url">Cover URL</label>
    <input type="text" name="cover_url" placeholder="{{$book->cover_url}}">

    <label for="pub_date">Publication Date</label>
    <input type="text" name="pub_date" placeholder="{{$book->pub_date}}">

    <button type="submit">
      Edit
    </button>
  </form>

@endsection