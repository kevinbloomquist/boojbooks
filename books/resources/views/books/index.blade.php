<!-- initial book view for index route -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>BoojBooks</title>
  </head>
  <body>
    <ul>
    @foreach($books as $book)
    <li> 
      <a href = "{{route('books.show', $book)}}">
     {{$book->name}}
      </a>  
    </li> 
    @endforeach
     </ul>
    
  </body>
</html>
