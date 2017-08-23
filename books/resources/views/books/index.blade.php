<!-- initial book view for index route -->

@extends('layouts.app')
@section('main')
  
  @include('books.nav')

      @if (Session::has('message'))
      <div class="alert alert-info">{{ Session::get('message') }}</div>
      @endif

    <div class= "row">

      @foreach($books as $book)
        <div class = "card col-md-3" style="padding-top:10px">
        <!-- REMOVE/ change: work on image for solid sizing and responsiveness -->
            <img class= "card-image-top rounded mx-auto d-block" src = "{{$book->cover_url}}" width = "150rem" height = "200rem" alt = "Sweet Book Pic Goes Here!">
            <div class="card-title text-center" >
                <a href = "{{route('books.show', $book)}}">
                  <span class ="card-title">{{$book->title}}</span>
                </a> 
            </div>
            <form action="{{ url('books/'.$book->id) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button type="submit" class="btn btn-block">Delete</button>
                <a class="btn btn-block" href="{{ route('books.edit',$book) }}">Edit this book</a>
            </form>
        </div>
      @endforeach
      <!-- Sort block btn -->
      <a class="btn btn-block btn-lg" href="{{ url('books/auth_sort')}}">Sort by Author</a>
      <!-- End Sort block btn -->
    </div>
    <div class="row justify-content-center">
      <div class="justify-content-center">
        <div class="pagination pagination-lg justify-content-center">
        {{$books->links()}}
        </div>
      </div>
    </div>

@endsection
