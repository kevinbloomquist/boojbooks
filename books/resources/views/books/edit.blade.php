@extends('layouts.app')
@section('main')

  <h1>Edit {{$book->title}}</h1>

  <form action="{{route('books.update',$book)}}" method= "POST">
  {{ method_field('PUT') }}

  {{csrf_field()}}
  <input type = "hidden" name= "csrf_token" value= "DaBSErIR...WPPI">
  <table>
    <tr>
      <td style="padding:10px;">
        <label for="title">Title</label>
      </td>
      <td style="padding:10px;">
        <input type="text" name="title" placeholder="{{$book->title}}">
      </td>
    </tr>
    <tr>
      <td style="padding:10px;">
        <label for="author">Author</label>
      </td>
      <td style="padding:10px;">
        <input type="text" name="author" placeholder="{{$book->author}}">
      </td>
    </tr>
    <tr>
      <td style="padding:10px;">
        <label for="cover_url">Cover URL</label>
      </td>
      <td style="padding:10px;">
        <input type="text" name="cover_url" placeholder="{{$book->cover_url}}">
      </td>
    </tr>
    <tr>
      <td style="padding:10px;">
        <label for="pub_date">Publication Date</label>
      </td>
        <td style="padding:10px;">
      <input type="text" name="pub_date" placeholder="{{$book->pub_date}}">
      </td>
    </tr>
    <tr>
      <td colspan="2" style="padding:10px;">
        <button type="submit">
          Edit
        </button>
      </td>
    </tr>
  </table>
  </form>

@endsection