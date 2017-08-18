

<!-- There may be a possible conflict here. Since no default values are specified in the model there may have to be an entry for each key->value pair? If so just flesh out the form or reduce categories in the model and run migration again I think -->

@extends('layouts.app')
@section('main')

  <h1>Create a New Book Entry</h1>

  <form action="{{route('books.store')}}" method= "post">

  {{csrf_field()}}
  <input type = "hidden" name= "csrf_token" value= "DaBSErIR...WPPI">
    
    <label for="title">Title</label>
    <input type="text" name="title" placeholder="Book Title">

    <label for="author">Author</label>
    <input type="text" name="author" placeholder="Author">

    <label for="cover_url">Cover URL</label>
    <input type="text" name="cover_url" placeholder="Cover URL">

    <label for="pub_date">Publication Date</label>
    <input type="text" name="pub_date" placeholder="YYYY-MM-DD">

    <button type="submit">
      ADD
    </button>
  </form>

@endsection