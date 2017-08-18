<!-- initial book view for index route -->

@extends('layouts.app')
@section('main')


    <div>
      @if (Session::has('message'))
      <div class="alert alert-info">{{ Session::get('message') }}</div>
      @endif
      
      @foreach($books as $book)
        <div class = "card">
          <img src = "{{$book->cover_url}}" width = "200px" height = "300px" alt = "Sweet Book Pic Goes Here!">
          <br>
          <a href = "{{route('books.show', $book)}}">
         {{$book->title}}
          </a>  
        </div>
        <form action="{{ url('books/'.$book->id) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}

            <button type="submit" class="btn btn-danger">
                <i class="fa fa-trash"></i> Delete
            </button>
            <a class="btn btn-small btn-info" href="{{ URL::to('books/' . $book->id . '/edit') }}">Edit this book</a>

        </form>
      @endforeach
    </div>
    {{$books->links()}}

@endsection
