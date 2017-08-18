<!DOCTYPE html>
<html lang= "en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

<!-- CSS link -->
	<link href="../../..public/css/app.css" rel="stylesheet" type="text/css">
	<title>Booj Books</title>

</head>
<body>
<!-- Handle and display errors -->
  @if(count($errors) >0)
  	<ul>
  	@foreach ($errors->all() as $error)
  		<li>{{$error}}</li>
  	@endforeach
  	</ul>
  @endif
  
<!-- Invokes viewing area for templates and views -->
<a href="{{ route('books.create') }}">Add a Book</a>
  @yield('main')
  
</body>
</html>