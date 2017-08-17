<!-- initial book view for index route -->

@extends('layouts.app')
@section('main')

    <ul>
      @foreach($books as $book)
        <div class = "card">
          <img src = "{{$book->cover_url}}" width = "200px" height = "300px" alt = "Sweet Book Pic Goes Here!">
          <br>
          <a href = "{{route('books.show', $book)}}">
         {{$book->title}}
          </a>  
        </div>
      @endforeach
    </ul>
    {{$books->links()}}

@endsection
