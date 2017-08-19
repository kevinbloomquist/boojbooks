<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Booj Books</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <!-- Links -->
        <link rel="stylesheet" src="../../css/app.css" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <!-- Begin video loop -->
                <div class="homepage-hero-module">
                    <div class="video-container">
                        <div class="filter"></div>
                        <video autoplay loop class="fillWidth">
                            <source src="../assets/Dancing-Bulbs/MP4/Dancing-Bulbs.mp4" type="video/mp4" />
                            <source src="../assets/Dancing-Bulbs/WEBM/Dancing-Bulbs.webm" type="video/webm" />
                        </video>
                            <div class="poster hidden">
                                <img src="../assets/Dancing-Bulbs/snapshots/Dancing-Bulbs.jpg" alt="">
                            </div>
                        </div>
                </div>
                <source src="../resources/assets/Dancing-Bulbs/OGV/Dancing-Bulbs.ogv" type="video/ogv">
                <!-- End video loop -->

                <div class="title text-center m-b-md">
                    <h1>BOOJ BOOKS</h1>
                    <a href="{{ route('books.index') }}" class="link">Enter</a>

                </div>

                <div class="links">
                   <!-- <a href="{{ route('books.create') }}">Add a Book</a> -->

                    <!-- <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a> -->
                </div>
            </div>
        </div>
    </body>
</html>
