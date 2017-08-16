@extends('layouts.app')
@section('main')

  <h1>Create a New Book Entry</h1>

  <form class="card" action="{{route('books.store')}}" method = "post">
    
    <label for="title">Title</label>
    <input type="text" name="title" placeholder="Book Title">

    <label for="Author">Author</label>
    <input type="text" name="Author" placeholder="Author">

    <label for="cover_url">Cover URL</label>
    <input type="text" name="cover_url" placeholder="Cover URL">

    <button type="submit">
      Create
    </button>
  </form>

@endsection