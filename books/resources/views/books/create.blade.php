

<!-- REMOVE/change: There may be a possible conflict here. Since no default values are specified in the model there may have to be an entry for each key->value pair? If so just flesh out the form or reduce categories in the model and run migration again I think -->

@extends('layouts.app')
@section('main')
  @include('books.nav')
<h1>Create a New Book Entry</h1>

<form action="{{route('books.store')}}" method= "POST">

  {{csrf_field()}}
  <input type = "hidden" name= "csrf_token" value= "DaBSErIR...WPPI">
    
  <table>
    <tr>
      <td style="padding:10px;">
        <label for="title">Title</label>
      </td>
      <td style="padding:10px;">
        <input type="text" name="title" placeholder="Title">
      </td>
    </tr>
    <tr>
      <td style="padding:10px;">
        <label for="author">Author</label>
      </td>
      <td style="padding:10px;">
        <input type="text" name="author" placeholder="Author">
      </td>
    </tr>
    <tr>
      <td style="padding:10px;">
        <label for="cover_url">Cover URL</label>
      </td>
      <td style="padding:10px;">
        <input type="text" name="cover_url" placeholder="Cover URL">
      </td>
    </tr>
    <tr>
      <td style="padding:10px;">
        <label for="pub_date">Publication Date</label>
      </td>
      <td style="padding:10px;">
        <input type="text" name="pub_date" placeholder="Publication Date">
      </td>
    </tr>
    <tr>
      <td colspan="2" style="padding:10px;">
        <button type="submit">
          Add
        </button>
      </td>
    </tr>
  </table>
</form>

@endsection