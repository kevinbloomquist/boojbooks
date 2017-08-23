@extends('layouts.app')
@section('main')
<div class="row justify-content-center">
    <div class= "card">
        <div class="card-block justify-content-center">
            <h1>{{$book->name}}</h1>
            	<!-- REMOVE/ change: once built out change width/height to responsive values for final layout -->
            	<center><img src = "{{$book->cover_url}}" width = "300px" height = "400px" alt = "Sweet Book Pic Goes Here!"></center>
            	<h2>Title: {{$book->title}}</h2>
            	<h3>Author: {{$book->author}}</h3>
            	<p>Publication Date: {{$book->pub_date}}</p>
            	<p>DB id: {{$book->id}}</p>

        </div>
        <div class="card-block justify-content-center">
            <form action="{{ url('books/'.$book->id) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button type="submit" class="btn btn-block">Delete
                </button>
                <a class="btn btn-block" href="{{ route('books.edit',$book) }}">Edit this book</a>
            </form>
        </div>
    </div>
    </div>
</div>
    
@endsection