<!-- initial book view for index route -->

@extends('layouts.app')
@section('main')




    <div>
    @include('books.nav')

      @if (Session::has('message'))
      <div class="alert alert-info">{{ Session::get('message') }}</div>
      @endif

      @foreach($books as $book)
        <div class = "card">
          <img class= "card-image-top" src = "{{$book->cover_url}}" width = "200px" height = "300px" alt = "Sweet Book Pic Goes Here!">
          <div class="card-block">
            <a href = "{{route('books.show', $book)}}">
              <span class ="card-title">{{$book->title}}</span>
            </a> 
          </div> 
        </div>
        <form action="{{ url('books/'.$book->id) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
          <div class= "card-block">
            <button type="submit" class="btn btn-danger">Delete
            </button>
            <a class="btn btn-primary" href="{{ route('books.edit',$book) }}">Edit this book</a>
          </div>
        </form>
      @endforeach
    </div>
    {{$books->links()}}

@endsection
