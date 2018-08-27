<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LMS</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="/css/style.css">
        
    </head>
    <body>
    <title>LMS</title>

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
                <div class="title m-b-md">
                    Culiat HS Library
                </div>

              <div class="login-form">
                <div class="signin">Welcome!</div>
                <div class="signindesc">Manage Books, View Transaction Histories, Check Available Books and more.</div>
              </div>
            </div>
            
        </div>
        <div class="featured-books">
                <div class="featured-books-title">Featured Books</div>
                <div class="books-container">
                    <div class="booklists">
                    <div class="books"><img src="/img/Book1.jpg" alt=""><div class="book-desc">Game of Thrones</div></div>
                    <div class="books"><img src="/img/Book2.jpg" alt=""><div class="book-desc">The Martian</div></div>
                    <div class="books"><img src="/img/Book3.jpg" alt=""><div class="book-desc">How to be the Perfect Dutch</div></div>
                    <div class="books"><img src="/img/Book4.jpg" alt=""><div class="book-desc">Healthy Happy Long Life</div></div>
                    <div class="books"><img src="/img/Book5.jpg" alt=""><div class="book-desc">Company Law</div></div>
                    <div class="books"><img src="/img/Book6.jpg" alt=""><div class="book-desc">The Catcher in the Rye</div></div>
                    <div class="books"><img src="/img/Book7.jpg" alt=""><div class="book-desc">The Defiant Mind</div></div>
                    <div class="books"><img src="/img/Book1.jpg" alt=""><div class="book-desc">Game of Thrones</div></div>
                    </div>
                </div>
            </div> 
    </body>
</html>
