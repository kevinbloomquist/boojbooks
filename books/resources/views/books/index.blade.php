<!-- initial book view for index route -->

@extends('layouts.app')
@section('main')

    <ul>
      @foreach($books as $book)
        <li> 
          <a href = "{{route('books.show', $book)}}">
         {{$book->name}}
          </a>  
        </li> 
      @endforeach
    </ul>
    {{$books->links()}}

@endsection
