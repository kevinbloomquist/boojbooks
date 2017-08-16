<!DOCTYPE html>
<html lang= "en">
<head>
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
  @yield('main')
  
</body>
</html>